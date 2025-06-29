<?php
$sTable = TBL_USERS;
$aColumns = [
    $sTable . '.user_id',
    "CONCAT_WS(' ',".$sTable.".name,".$sTable.".last_name) as user_fullname",
    'UR.name as user_role_name',
    $sTable . '.mobile',
    $sTable . '.last_login',
    $sTable . '.created_time',
    $sTable . '.is_active',
    $sTable . '.picture',
    $sTable . '.email',
];
$sIndexColumn = 'user_id';
$join = [
    "JOIN " . TBL_USER_ROLE . " UR ON UR.id = " . $sTable . ".user_role AND UR.`is_delete` = 0",
];

$where = [];
array_push($where, $sTable . '.is_delete = 0');
array_push($where, 'AND ' . $sTable . '.user_role != 1');

if (isset($user_role) && $user_role != '') {
    $user_role = implode(',', $user_role);
    array_push($where, 'AND ' . $sTable . '.user_role IN  (' . $user_role . ')');
}
if (isset($contactor) && $contactor != '') {
    $contactor = implode(',', $contactor);
    array_push($where, 'AND CNT.user_id IN  (' . $contactor . ')');
}
if (!empty($skill)) {
    $skillarr = array();
    foreach ($skill as $srow) {
        $skillarr[] = " S." . $srow . " = 1 ";
    }
    array_push($where, " AND (" . implode(' OR ', $skillarr) . ")");
}
if (isset($status) && $status != '') {
    array_push($where, ' AND ' . $sTable . '.is_active = ' . $status);
}
/*if ($this->input->post('model')) {
    array_push($where, 'AND '.$sTable.'.model like "%' . $this->input->post('model').'%"');
} */

$filter = [];
$result = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where);

$output = $result['output'];
$rResult = $result['rResult'];

// $security = \Config\Services::security();
// $output['token'] = $security->get_csrf_hash();

//$output['aaData'] = $result['rResult'];
foreach ($rResult as $key => $aRow) {
    $aRow = (array)$aRow;
    // pr($aRow);die;
    $id = $aRow['user_id'];
    $row = [];
    $row[] = $id;
    $userPic = (!empty($aRow['picture'])) ? base_url(PICTURE . $aRow['picture']) : ADMIN_ASSETS_PATH . "img/avatars/9.png";
    $userhtml = '<div class="d-flex justify-content-start align-items-center user-name">
            <div class="avatar-wrapper"><div class="avatar avatar-sm me-3">
            <a href="' . base_url('backend/users/view/' . $id) . '">
            <img src="' . $userPic . '" alt="Avatar" class="rounded-circle" onerror="imgError(this);"></a>
            </div></div><div class="d-flex flex-column"><a href="' . base_url('backend/users/view/' . $id) . '" class="text-body text-truncate">
            <span class="fw-semibold">' . $aRow['user_fullname'] . '</span></a><small class="text-muted">' . $aRow['email'] . '</small></div>
        </div>';
    $row[] = $userhtml;

    $row[] = '<span class="text-truncate d-flex align-items-center"><span class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2">
            <i class="bx bx-user bx-xs"></i></span>' . $aRow['user_role_name'] . '</span>';

    $row[] = DEFAULT_COUNTY_CODE.$aRow['mobile'];
    $row[] = $aRow['last_login'];

    $checked = (isset($aRow['is_active']) && $aRow['is_active'] == 1) ? 'checked' : '';
    $row[] = '<label class="switch switch-primary" for="customSwitch' . $key . '">
                <input type="checkbox" name="is_active" value="' . $id . '" class="switch-input btn_user_status" id="customSwitch' . $key . '" ' . ($aRow['is_active'] == 1 ? 'checked' : '') . ' >
                <span class="switch-toggle-slider"><span class="switch-on"> <i class="bx bx-check"></i></span><span class="switch-off"> <i class="bx bx-x"></i></span></span>
            </label>';

    $option = '<div class="d-inline-block text-nowrap">';
    // $option = '<a href="' . base_url('backend/users/view/' . $id) . '" data-toggle="tooltip" title="" class="btn btn-sm btn-icon"><i class="bx bx-show"></i></a>&nbsp;';

    $option .= '<a href="' . base_url('backend/users/edit/' . $id) . '" data-toggle="tooltip" title="" class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></a>&nbsp;';
    $option .= '<a href="javascript:void(0);" data-id="' . $id . '" data-toggle="tooltip" title="" class="btn btn-sm btn-icon delete_user"><i class="bx bx-trash"></i></a>&nbsp';
    $option .= '<a href="mailto:'.$aRow['email'].'" class="btn btn-sm btn-icon"><i class="bx bx-envelope"></i></a>&nbsp
            <a href="https://wa.me/32'.$aRow['mobile'].'?text=Hi" target="_blank" class="btn btn-sm btn-icon"><i class="bx bxl-whatsapp"></i></a>&nbsp';
    $option .= '</div>';
    $row[] = $option;
    $output['aaData'][] = $row;
}