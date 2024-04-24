<?php
defined('BASEPATH') or exit('No direct script access allowed');
$sTable = TBL_WORKSPACES;
$aColumns = [
    'custom_order',
    'title',
    "Group_concat(DISTINCT UR.name SEPARATOR ', ') as role_names",
    'link',
    $sTable.'.is_active',
    $sTable.'.id',
];
$sIndexColumn = 'id';
$join = [
    "LEFT JOIN ".TBL_USER_ROLE." UR ON FIND_IN_SET(UR.id, ".$sTable.".roles) > 0 AND UR.`is_delete` = 0",
];

$where = [];
array_push($where,$sTable.'.is_delete = 0');
/*if ($this->input->post('model')) {
    array_push($where, 'AND '.$sTable.'.model like "%' . $this->input->post('model').'%"');
} */
$filter = [];
$result = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, [], "GROUP BY ".$sTable.".id");

$output = $result['output'];
$rResult = $result['rResult'];
$CI = &get_instance();
$output['token'] = $CI->security->get_csrf_hash();
foreach ($rResult as $key => $aRow) {
    $id = $aRow['id'];
    $row = [];
    // $row[] = $id;
    $row[] = $aRow['custom_order'];
    $row[] = $aRow['title'];
    $row[] = $aRow['role_names'];
    $row[] = '<a class="badge bg-label-success" href="'.$aRow['link'].'">Link</a>';

    $id=encrypt_String($id);       
    
    $row[] = '<label class="switch switch-primary" for="customSwitch'.$key.'">
                <input type="checkbox" name="is_active" value="'.$id.'" class="switch-input btn_workspace_status" id="customSwitch'.$key.'" '.($aRow['is_active']==1 ? 'checked' : '').' >
                <span class="switch-toggle-slider"><span class="switch-on"> <i class="bx bx-check"></i></span><span class="switch-off"> <i class="bx bx-x"></i></span></span>
            </label>';

  
    $option = '<div class="d-inline-block text-nowrap">';
    if(check_permission('workspaces', 'can_edit', $this->user_permission)){
        $option .='<a href="'.base_url('backend/workspaces/edit/'.$id).'" data-toggle="tooltip" title="" class="btn btn-sm btn-icon" data-original-title="Edit"><i class="bx bx-edit"></i></a>&nbsp ';
    }
    if(check_permission('workspaces', 'can_delete', $this->user_permission)){
        $option .=' <a href="javascript:void(0);" data-id="'.$id.'" data-toggle="tooltip" title="" class="btn btn-sm btn-icon delete_workspace" data-original-title="Remove"><i class="bx bx-trash"></i></a>';
    }
    $option .='</div>';
    $row[] = $option;
    $output['aaData'][] = $row;
}