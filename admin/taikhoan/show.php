<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?=$title?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết tài khoản</h6>
    </div>
    <div class="card-body">
       <table class="table">
           <tr>
            <th>Trường dữ liệu</th>
            <th>Dự liệu</th>
           </tr>
           <?php foreach($taikhoan1 as $fieldName => $value) : ?>
           <tr>
            <td><?= ucfirst($fieldName) ?></td>
            <td>
                <?php
                switch($fieldName){
                    case 'password':
                        echo '***********';
                        break;
                        case 'vai_tro':
                          echo $value ? ' <span class="badge badge-success">Admin</span>' : '<span class="badge badge-warning">Member</span>';
                            break;
                            default:
                        echo $value;
                        break;
                }
                ?>
            </td>
            <?php endforeach;?>
           </tr>
       </table>
       <a href="<?=BASE_URL_ADMIN?>/?act=taikhoan"class="btn btn-danger">Trờ lại trang</a>
    </div>
</div>

</div>
