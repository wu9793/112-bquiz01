<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="/api/edit_info.php">
        <table style="width:100%; text-align:center">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td>
                            <input type="text" name="acc[]" style="width: 90%;" value="<?= $row['text']; ?>">
                        </td>
                        <td>
                            <input type="password" name="pw[]" value="<?= $row['pw']; ?>">
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <input type="hidden" name="id[]" value="<?= $row['text']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style=" width:100%; margin:auto; margin-top:40px;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?= $do; ?>">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>