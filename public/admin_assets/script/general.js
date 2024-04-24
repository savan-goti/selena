var baseUrl = $('#base').val();

function delete_confirmation() {
    var c = confirm("Do you really want to delete this record?");
    if (c) {
        return true;
    } else {
        return false;
    }
}

(function ($, window, document, undefined) {
    $(document).ready(function () {

        /*
        // for save user device id in DB
        function saveUserDeviceId(web_device_id){
            if(web_device_id){
                $.ajax({
                    type: 'POST',
                    url: baseUrl + 'auth/save_user_deviceid',
                    data: {
                        web_device_id: web_device_id
                    },
                    success: function (response) {
                        console.log(web_device_id);
                    }
                });
            }
        }
        async function getUserDeviceId() {
            return await OneSignal.getUserId();
        }
        (async () => {
            var web_device_id = await getUserDeviceId();
            saveUserDeviceId(web_device_id);
        })()
        */
        
        /*
        // for save user device id in DB
        (pushalertbyiw = window.pushalertbyiw || []).push(['onReady', onPAReady]);
        function onPAReady() {
            web_device_id = PushAlertCo.subs_id;
            console.log(web_device_id); //if empty then user is not subscribed
            saveUserDeviceId(web_device_id);
        }*/


        $(".select2").select2();

        // var a = (new Tagify(document.querySelector(".myTagInput")));

        var tagify = new Tagify( document.querySelector(".myTagInput"), {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });

        // $(".validNumber").inputFilter(function(value) {
        //     return /^-?\d*[.,]?\d*$/.test(value);
        // });

        $("input[type='file']").change(function () {
            readURL(this);
        });

        function readURL(input) {
            var elem = $(input);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    elem.next('img').attr('src', e.target.result);
                }
                reader.readAsDataURL(elem.get(0).files[0]);
            }
        }

        $(".validNumber").on("keypress keyup blur", function (event) {
            $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });

        // custom datatable
        $('#tTable').DataTable({
            "order": [],
        });

        // custom text editor
        $('.custom_text_editors').each(function () {
            CKEDITOR.replace($(this).prop('id'), {
                removeButtons: 'PasteFromWord'
            });
        });

        /*$(document).delegate("form", "submit", function (event) {
            var c = confirm("Do you really want to submit the form ?");
            if (c) {
                $("#loader").show();
                return true;
            } else {
                return false;
            }
        });*/

        $(document).delegate(".chkRowclick", "click", function (event) {
            var key = $(this).data('key');
            if (this.checked) {
                $('.chkRow' + key + '').each(function () {
                    this.checked = true;
                });
            } else {
                $('.chkRow' + key + '').each(function () {
                    this.checked = false;
                });
            }
        });

        var last_id = window.location.href.split("/").pop();
        var queryString = window.location.search;

        $(document).delegate(".btntoggle_earning", "click", function (event) {
            $('.lbltech_earning').toggleClass("d-none");
        });

        $(document).delegate(".btntoggle_contractorearning", "click", function (event) {
            $('.lblcontractor_earning').toggleClass("d-none");
        });

        initDataTable('.table-user', baseUrl + 'backend/users/getAjaxListData' + queryString + ' ', [7, 8], [7, 8]);
        $(document).delegate(".btn_user_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/users/change_user_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_user", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/users/delete',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }

        });
        $(document).delegate(".change_user_status", "click", function (event) {
            var record_id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            if (record_id && status) {
                $.ajax({
                    type: "POST",
                    url: baseUrl + "backend/users/change_user_status",
                    data: {
                        status: status,
                        record_id: record_id
                    },
                    success: function (result) {
                        location.reload();
                    }
                });
            }
        });
        $(document).delegate(".change_contractor_status", "click", function (event) {
            var record_id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            if (record_id && status) {
                $.ajax({
                    type: "POST",
                    url: baseUrl + "backend/contractor/change_status",
                    data: {
                        status: status,
                        contactor_id: record_id
                    },
                    success: function (result) {
                        location.reload();
                    }
                });
            }
        });


        initDataTable('.table-contractor', baseUrl + 'backend/contractor/getAjaxListData', [6,7], [6,7]);
        $(document).delegate(".delete_contactor", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var contactor_id = $(this).attr('data-id');
                if (contactor_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/contractor/delete_record',
                        data: {
                            contactor_id: contactor_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });
        $(document).delegate(".btn_contactor_status", "change", function (event) {
            var status = 0;
            var contactor_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/contractor/change_status",
                data: {
                    status: status,
                    contactor_id: contactor_id
                },
                success: function (result) {
                }
            });
        });


        initDataTable('.table-workspaces', baseUrl + 'backend/workspaces/getAjaxListData', [2, 3, 4, 5], [2, 3, 4, 5], [], [0, 'asc']);
        $(document).delegate(".btn_workspace_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/workspaces/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_workspace", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/workspaces/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });


        initDataTable('.table-user_technician_input', baseUrl + 'backend/users/getTechnicianInputData/' + last_id, [3, 4, 5], [3, 4, 5], [], [1, 'desc']);
        initDataTable('.table-user_material_order', baseUrl + 'backend/users/getMeterialOrderData/' + last_id, [1, 5, 6], [1, 5, 6], [], [0, 'desc']);

        initDataTable('.table-user_role', baseUrl + 'backend/user_role/getAjaxListData', [3, 4, 5, 6], [ 3, 4, 5, 6]);
        $(document).delegate(".btn_user_role_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/user_role/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_user_role", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/user_role/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });


        initDataTable('.table-material', baseUrl + 'backend/material/getAjaxListData' + queryString + ' ', [1, 6, 7], [1, 6, 7]);
        $(document).delegate(".btn_material_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/material/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_material", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/material/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });

        initDataTable('.table-stock', baseUrl + 'backend/stock/getAjaxListData', [1,4,5], [1,4,5], [], [0, 'desc']);
        $(document).delegate(".delete_stock", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var stock_id = $(this).attr('data-id');
                if (stock_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/stock/delete_stock_record',
                        data: {
                            stock_id: stock_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });
        $(document).delegate(".btn_stock_status", "change", function (event) {
            var status = 0;
            var stock_id = $(this).val();
            if (this.checked==true) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/stock/change_status",
                data: {
                    status: status,
                    stock_id: stock_id
                },
                success: function (result) {

                }
            });
        });

        initDataTable('.table-user_stock', baseUrl + 'backend/stock/getuser_stockAjaxListData', [4,5], [4,5], [], [0, 'desc']);
        $(document).delegate(".show_user_stock_list", "click", function (event) {
            var el = $(this);
            var user_id = $(this).attr('data-user_id');
            var external_user_id = $(this).attr('data-external_user_id');
            var user_stock_id = $(this).attr('data-id');
            var input_date = $(this).attr('data-date');
            // if (user_stock_id && input_date && (user_id || external_user_id)) {
                $.ajax({
                    type: 'POST',
                    url: baseUrl + 'backend/stock/user_stock_modal',
                    data: {
                        user_id: user_id,user_stock_id:user_stock_id, input_date:input_date, external_user_id:external_user_id
                    },
                    success: function (response) {
                        if (response) {
                           $("#modal_popup").html(response)
                        } 
                    }
                });
            // }
        });

        initDataTable('.table-stock_users', baseUrl + 'backend/stock_users/getAjaxListData' + queryString, [], [], [], [0, 'desc']);
        $(document).delegate(".btn_stock_user_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/stock_users/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_stock_users", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/stock_users/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });
        
        initDataTable('.table-stock_setting', baseUrl + 'backend/stock/getStockSettingkAjaxListData', [], []);
        $(document).delegate(".stocksetting", "change", function (event) {
            var status = 0;
            var setting_id = $(this).val();
            if (this.checked==true) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/stock/stocksetting_switch",
                data: {
                    status: status,
                    setting_id: setting_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_setting_Record", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var setting_id = $(this).attr('data-id');
                if (setting_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/stock/delete_setting_Record',
                        data: {
                            setting_id: setting_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });






        initDataTable('.table-material_order', baseUrl + 'backend/material/getOrderAjaxListData' + queryString, [9], [9], [], [0, 'desc']);
        $(document).delegate(".delete_material_order", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/material/delete_material_order',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });


        initDataTable('.table-skills', baseUrl + 'backend/skills/getAjaxListData', [3, 4], [3, 4]);
        $(document).delegate(".btn_skill_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/skills/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_skill", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/skills/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });


        initDataTable('.table-phone_category', baseUrl + 'backend/phonebook/getphonecategoryAjaxListData', [], []);
        $(document).delegate(".phone_categoryActiveDeactive", "change", function (event) {
            var status = 0;
            var phone_cat_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/phonebook/phone_cat_change_status",
                data: {
                    status: status,
                    phone_cat_id: phone_cat_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_phone_category", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var phone_cat_id = $(this).attr('data-id');
                if (phone_cat_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/phonebook/delete_category_record',
                        data: {
                            phone_cat_id: phone_cat_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }

        });


        initDataTable('.table-phonebook', baseUrl + 'backend/phonebook/getphonebookAjaxListData', [], []);
        $(document).delegate(".phonebookActiveDeactive", "change", function (event) {
            var status = 0;
            var phonebook_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/phonebook/change_status",
                data: {
                    status: status,
                    phonebook_id: phonebook_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_phonebook", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var phonebook_id = $(this).attr('data-id');
                if (phonebook_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/phonebook/delete_record',
                        data: {
                            phonebook_id: phonebook_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }

        });


        initDataTable('.table-languages', baseUrl + 'backend/languages/getAjaxListData', [3, 4], [3, 4]);
        $(document).delegate(".btn_language_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/languages/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {
                }
            });
        });
        $(document).delegate(".delete_language", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/languages/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });

        initDataTable('.table-user_meldings', baseUrl + 'backend/melding/getAjaxListData' + queryString, [7], [7], [], [0, 'desc']);
        $(document).delegate(".user_melding_modal", "click", function (event) {
            var el = $(this);
            var melding_id = $(this).attr('data-id');
            var type = $(this).attr('data-type');
            var ttab = $(this).attr('data-tab');
            if (melding_id) {
                $.ajax({
                    type: 'POST',
                    url: baseUrl + 'backend/melding/molding_modal',
                    data: {
                        melding_id: melding_id, type: type, tab: ttab
                    },
                    success: function (response) {
                        if (response) {
                            $("#modal_popup").html(response)
                        }
                    }
                });
            }
        });
        $(document).delegate(".delete_user_melding", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/melding/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });


        initDataTable('.table-notification_type', baseUrl + 'backend/notification_type/getAjaxListData', [2, 3], [2, 3]);
        $(document).delegate(".btn_notification_type_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/notification_type/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_notification_type", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/notification_type/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });

        $(document).delegate(".pollDetailform", "submit", function (e) {
            e.preventDefault();
            var _ele = $(this);
            $.ajax({
                type: 'POST',
                url: baseUrl+"backend/workspaces/save_poll_answers",
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                success: function(result){
                    _ele.closest(".poll_response_div").html(result)
                }
            });
        });

        function load_navbar_notification() {
            var el = $(this);
            $.ajax({
                type: 'POST',
                url: baseUrl + 'backend/admin/load_navbar_notification',
                data: {
                    // record_id: record_id
                },
                success: function (response) {
                    if (response) {
                        $(".dropdown-notifications .dropdown-notifications-list .list-group-flush").html(response);
                    }
                }
            });
        }
        $(document).delegate(".read_notification", "click", function (event) {
            var el = $(this);
            var record_id = $(this).attr('data-id');
            if (record_id) {
                $.ajax({
                    type: 'POST',
                    url: baseUrl + 'backend/notification/read_notification',
                    data: {
                        record_id: record_id
                    },
                    success: function (response) {
                        if (response) {
                            el.closest(".alert").hide();
                            el.closest(".dropdown-notifications-item").hide();
                            load_navbar_notification();
                        }
                    }
                });
            }
        });
        $(document).delegate(".load_navbar_notification", "click", function (event) {
            load_navbar_notification();
        });

        initDataTable('.table-timeline', baseUrl + 'backend/timeline/getAjaxListData' + queryString, [3,4,5,6], [3,4,5,6], [], [0, 'desc']);
        $(document).delegate(".btn_timeline_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/timeline/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_timeline", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/timeline/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });

        $(document).delegate(".show_poll_answer", "click", function (event) {
            var el = $(this);
            var record_id = $(this).attr('data-id');
            if (record_id) {
                $.ajax({
                    type: 'POST',
                    url: baseUrl + 'backend/workspaces/get_timline_poll_detail',
                    data: {
                        record_id: record_id
                    },
                    success: function (response) {
                        if (response) {
                            $(".show_modal_content").html(response)
                        }
                    }
                });
            }
        });

        var phone_queryString = window.location.search;
        if (phone_queryString == '') {
            phone_queryString = "?tab=all";
        }
        initDataTable('.table-phonebook_list', baseUrl + 'backend/phonebook/getListAjaxListData' + phone_queryString, [1], [1], [], [0, 'asc']);

        initDataTable('.table-changelog', baseUrl + 'backend/changelog/getAjaxListData', [3, 4], [3, 4], [], [0, 'asc']);
        $(document).delegate(".btn_changelog_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/changelog/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_changelog", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/changelog/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });

        initDataTable('.table-stock_users', baseUrl + 'backend/stock_users/getAjaxListData' + queryString, [], [], [], [0, 'desc']);
        $(document).delegate(".btn_stock_user_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/stock_users/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_stock_users", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/stock_users/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });

        initDataTable('.table-employee_work', baseUrl + 'backend/employee_work/getAjaxListData' + queryString, [2,6], [2,6], [], [0, 'desc']);
        $(document).delegate(".btn_employee_work_status", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/employee_work/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".delete_employee_work", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/employee_work/delete_record',
                        data: {
                            record_id: record_id
                        },
                        success: function (response) {
                            if (response) {
                                el.closest("tr").hide();
                            }
                        }
                    });
                }
            }
        });
        $(document).delegate(".employee_work_modal", "click", function (event) {
            var el = $(this);
            var work_id = $(this).attr('data-id');
            var username = $(this).attr('data-username');
            if (work_id) {
                $.ajax({
                    type: 'POST',
                    url: baseUrl + 'backend/employee_work/work_modal',
                    data: {
                        work_id: work_id, username: username
                    },
                    success: function (response) {
                        if (response) {
                            $("#modal_employee_work_detail .modal_popup").html(response)
                        }
                    }
                });
            }
        });

        $(document).delegate(".user_daily_work_modal", "click", function (event) {
            var el = $(this);
            var work_id = $(this).attr('data-id');
            var username = $(this).attr('data-username');
            if (work_id) {
                $.ajax({
                    type: 'POST',
                    url: baseUrl + 'backend/employee_work/user_daily_work_modal',
                    data: {
                        work_id: work_id, username: username
                    },
                    success: function (response) {
                        if (response) {
                            $("#modal_show_daily_work .modal_popup").html(response)
                        }
                    }
                });
            }
        });

    });
})(jQuery, window, document);
