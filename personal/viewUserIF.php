<?php
include '../config/db_connection.php';

if (isset($_SESSION['username'])) {
    $uname = $_SESSION['username'];

    $uInfo = "SELECT * FROM userdetail join userinfo on  userdetail.user_ID = userinfo.user_ID
    WHERE user_name = '$uname'";

    $resultUInfo = mysqli_query($conn, $uInfo);

    if (mysqli_num_rows($resultUInfo) > 0) {
        $row = mysqli_fetch_assoc($resultUInfo);

        $mail = $row['detail_email'];
        $name = $row['detail_fname'];
        $addr = $row['detail_address'];
        $phone = $row['user_phoneNum'];

        echo '
        <div class="user-info__form-container">
        <table>
            <tr>
                <th><label for="">Username :</label></th>
                <td>
                    <p class="output-data"> ' . $uname . ' </p>
                </td>
            </tr>

            <tr>
                <th><label for="">Email :</label></th>
                <td>
                    <p class="output-data">' . $mail . '</p>
                </td>
            </tr>

            <tr>
                <th><label for="">Họ và Tên :</label></th>
                <td>
                    <p class="output-data">' . $name . '</p>
                </td>
            </tr>

            <tr>
                <th><label for="">Địa chỉ :</label></th>
                <td>
                    <p class="output-data">' . $addr . '</p>
                </td>
            </tr>

            <tr>
                <th><label for="">Số Điện Thoại :</label></th>
                <td>
                    <p class="output-data">' . $phone . '</p>
                </td>
            </tr>
        </table>
        </div>
        ';
    }
}
