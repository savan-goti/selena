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

        $(".select2").select2();

        // var a = (new Tagify(document.querySelector(".myTagInput")));

        var tagify = new Tagify( document.querySelector(".myTagInput"), {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });

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

        initDataTable('.table-user', baseUrl + 'backend/users/getAjaxListData', [], [], [], [0,'desc']);
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

        
        initDataTable('.table-banner', baseUrl + 'backend/banner/getAjaxListData', [], []);
        $(document).delegate(".banner_switch", "change", function (event) {
            var status = 0;
            var record_id = $(this).val();
            if (this.checked) {
                status = 1;
            }
            $.ajax({
                type: "POST",
                url: baseUrl + "backend/banner/change_status",
                data: {
                    status: status,
                    record_id: record_id
                },
                success: function (result) {

                }
            });
        });
        $(document).delegate(".deletebanner", "click", function (event) {
            if (delete_confirmation()) {
                var el = $(this);
                var record_id = $(this).attr('data-id');
                if (record_id) {
                    $.ajax({
                        type: 'POST',
                        url: baseUrl + 'backend/banner/delete',
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

    });
})(jQuery, window, document);

function refresh_record_image_list(image_type, record_id){
    $.ajax({
        type: 'POST',
        url: baseUrl + 'backend/surveys/load_record_images/' + record_id,
        data: {
            image_type: image_type
        },
        success: function (response) {
            if (response) {
                $(".divRecordImagesType"+image_type).html(response)
            }
        }
    });
}