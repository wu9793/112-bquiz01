<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進佔總人數管理</p>
    <form method="post" target="back" action="?do=tii" >
        <table style="width:50%; margin:auto;">
            <tbody>
                <tr class="yel">
                    <td  width="45%">進佔總人數:</td>
                    <td width="55%">
                        <input type="number" name="total" value="<?=$Total->find(1)['total'];?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%; ">
            <tbody>
                <tr>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>