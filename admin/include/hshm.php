<div class="col-md-6" style="float: left;"> 
                                        <div class="input-group"style="background-color: white; text-align: justify; height: auto; width: 100%;">
                                            <table border="1" style="height: auto; width: auto;" >
                                                <tr>
                                                    <td style="font-weight: bold; text-align: center; font-size: 20px;">Dành cho người hiến máu</td>
                                                    <td style="font-weight: bold;text-align: center; width: 100px; font-size: 20px;"> Có </td>
                                                    <td style="font-weight: bold;text-align: center; width: 100px; font-size: 20px;">Không</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">1. Anh chị đã từng hiến máu ?</td>
                                                    <td style="text-align: center;" ><input name="tungHM" id="tungHMyes" value="1" type="radio" <?php if($row['tungHM']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="tungHM" id="tungHMyes" value="0" type="radio" <?php if($row['tungHM']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">2. Hiện tại, anh/chị có bị các bệnh viêm khớp, đau dạ dày, viêm gan/vàng da, bệnh tim, huyết áp thấp/cao, hen, ho kéo dài, bệnh máu, lao ?</td>
                                                    <td style="text-align: center;"><input name="viemKhop" id="viemKhopyes" value="1" type="radio" <?php if($row['cacbenh']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="viemKhop" id="viemKhopyes" value="0" type="radio" <?php if($row['cacbenh']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
                                                        <label for="benhkhac2" style="margin-left: 20px;">
                                                            Bệnh khác:
                                                        </label>
                                                        <input id="benhkhac2" class="form-control" type="text" style="width: 480px; margin-left: 20px;" value="<?php echo $row['benhkhac']; ?>">
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">3. Trong vòng 12 tháng gần đây, anh/chị có mắc các bệnh và đã được điều trị khỏi :</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Sốt rét,giang mai,lao,viêm não,phẩu thuật ngoại khoa ?</td>
                                                    <td style="text-align: center;"><input name="sotret" id="sotretyes" value="1" type="radio" <?php if($row['sotret12']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="sotret" id="sotretyes" value="0" type="radio" <?php if($row['sotret12']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Được truyền máu và các chế phẩm máu ?</td>
                                                    <td style="text-align: center;"><input name="truyenmau" id="truyenmauyes" value="1" type="radio"<?php if($row['truyenmau']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="truyenmau" id="truyenmauyes" value="0" type="radio"<?php if($row['truyenmau']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Tiêm vắc xin bệnh dại ?</td>
                                                    <td style="text-align: center;"><input name="vacxindai" id="vacxindaiyes" value="1" type="radio"<?php if($row['vacxin12']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="vacxindai" id="vacxindaiyes" value="0" type="radio"<?php if($row['vacxin12']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
                                                        <label for="benhkhac3" style="padding-left: 20px;">
                                                            Khác(cụ thể):
                                                        </label>
                                                        <input id="benhkhac3" class="form-control" type="text" style="width: 480px;margin-left: 20px;" value="<?php echo $row['vacxincuthe12']; ?>" >
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">4. trong vòng 6 tháng gần đây.anh/chị có bị một trong các triệu chứng sau không ?</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Sút cân nhanh không rõ nguyên nhân ?</td>
                                                    <td style="text-align: center;"><input name="sutcan" id="sutcanyes" value="1" type="radio"<?php if($row['sutcan6']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="sutcan" id="sutcanyes" value="0" type="radio"<?php if($row['sutcan6']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Nổi hạch kéo dài ?</td>
                                                    <td style="text-align: center;"><input name="noihach" id="noihachyes" value="1" type="radio"<?php if($row['noihach6']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="noihach" id="noihachyes" value="0" type="radio"<?php if($row['noihach6']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Chữa răng, châm cứu ?</td>
                                                    <td style="text-align: center;"><input name="chuarang" id="chuarangyes" value="1" type="radio"<?php if($row['chuarang6']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="chuarang" id="chuarangyes" value="0" type="radio"<?php if($row['chuarang6']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Xăm mình, xỏ lỗ tai, lỗ mũi?
                                                    </td>
                                                    <td style="text-align: center;"><input name="xamminh" id="xamminhyes" value="1" type="radio"<?php if($row['xamhinh6']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="xamminh" id="xamminhyes" value="0" type="radio"<?php if($row['xamhinh6']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
                                                        <label for="benhkhac4" style="padding-left: 20px;">
                                                            Khác(cụ thể):
                                                        </label>
                                                        <input id="benhkhac4" class="form-control" type="text" style="width: 480px;margin-left: 20px;" value="<?php echo $row['xamhinhcuthe6']; ?>">
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Sử dụng ma túy?</td>
                                                    <td style="text-align: center;"><input name="matuy" id="matuyyes" value="1" type="radio"<?php if($row['matuy6']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="matuy" id="matuyyes" value="0" type="radio"<?php if($row['matuy6']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Quan hệ tình dục với người nhiễm HIV hoặc người có hành vi nguy cơ lây nhiếm HIV ?</td>
                                                    <td style="text-align: center;"><input name="quanhehiv" id="quanhehivyes" value="1" type="radio"<?php if($row['qhHIV6']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="quanhehiv" id="quanhehivyes" value="0" type="radio"<?php if($row['qhHIV6']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Quan hệ tình dục với người cùng giới ?</td>
                                                    <td style="text-align: center;"><input name="quanhe" id="quanheyes" value="1" type="radio"<?php if($row['qhcunggioi6']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="quanhe" id="quanheyes" value="0" type="radio"<?php if($row['qhcunggioi6']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">5. Trong vòng 5 tháng gần đây anh/chị có :</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Khỏi bệnh sau khi mắc các bệnh viêm đường tiết niệu, viêm đa nhiễm trùng ,viêm phế quảng ,viêm phổi,sởi,quai bị,Rubella ?
                                                </td>
                                                    <td style="text-align: center;"><input name="khoibenh" id="khoibenhyes" value="1" type="radio"<?php if($row['tiemtietnieu1']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="khoibenh" id="khoibenhyes" value="0" type="radio"<?php if($row['tiemtietnieu1']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
                                                        <label for="benhkhac5" style="padding-left: 20px;">
                                                            Khác(cụ thể):
                                                        </label>
                                                        <input id="benhkhac5" class="form-control" type="text" style="width: 480px;margin-left: 20px;">
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Tiêm vắc xin phòng bệnh ?
                                                    </td>
                                                    <td style="text-align: center;"><input name="vacxinphongbenh" id="vacxinphongbenhyes" value="1" type="radio"<?php if($row['vacxin1']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="vacxinphongbenh" id="vacxinphongbenhyes" value="0" type="radio"<?php if($row['vacxin1']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
                                                        <label for="benhkhac5" style="padding-left: 20px;">
                                                            Khác(cụ thể):
                                                        </label>
                                                        <input id="benhkhac5" class="form-control" type="text" style="width: 480px;margin-left: 20px;" value="<?php echo $row['loaivacxin1']; ?>">
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Đi vào vùng có dịch bệnh lưu hành(sốt rết, sốt xuất huyết, Zika,...) ?</td>
                                                    <td style="text-align: center;"><input name="vaovungdich" id="vaovungdichyes" value="1" type="radio"<?php if($row['luuhanh']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="vaovungdich" id="vaovungdichyes" value="0" type="radio"<?php if($row['luuhanh']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">6. Trong vòng 7 ngày gần đây anh/chị có :</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Bị cúm , ho, nhức đầu, sốt ?</td>
                                                    <td style="text-align: center;"><input name="cumho" id="cumhoyes" value="1" type="radio"<?php if($row['cum7']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="cumho" id="cumhoyes" value="0" type="radio"<?php if($row['cum7']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Dùng thuốc kháng sinh, Aspirin, Cortuvid ?</td>
                                                    <td style="text-align: center;"><input name="thuockhangsinh" id="thuockhangsinhyes" value="1" type="radio"<?php if($row['dungthuoc7']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="thuockhangsinh" id="thuockhangsinhyes" value="0" type="radio"<?php if($row['dungthuoc7']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Tiêm vắc xin phòng viêm gan siêu vi B, Human Papilloma Virus ?
                                                    </td>
                                                    <td style="text-align: center;"><input name="vacxinphonggan" id="vacxinphongganyes" value="1" type="radio"<?php if($row['tiemvacxin7']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="vacxinphonggan" id="vacxinphongganyes" value="0" type="radio"<?php if($row['tiemvacxin7']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group pmd-textfield pmd-textfield-outline pmd-textfield-floating-label">
                                                        <label for="benhkhac6" style="padding-left: 20px;">
                                                            Khác(ghi cụ thể):
                                                        </label>
                                                        <input id="benhkhac6" class="form-control" type="text" style="width: 480px;margin-left: 20px;">
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">7. Câu hỏi dành cho phụ nữ?</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Hiện có thai, nuôi con dưới 12 tháng tuổi ?</td>
                                                    <td style="text-align: center;"><input name="cothai" id="cothaiyes" value="1" type="radio"<?php if($row['phunu1']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="cothai" id="cothaiyes" value="0" type="radio"<?php if($row['phunu1']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">- Có kinh nguyệt trong vòng 1 tuần hay không ?</td>
                                                    <td style="text-align: center;"><input name="kinhnguyet" id="kinhnguyetyes" value="1" type="radio"<?php if($row['phunu2']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="kinhnguyet" id="kinhnguyetyes" value="0" type="radio"<?php if($row['phunu2']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-left: 20px;padding-right: 20px;">8. Anh/chị đồng ý xét nghiệm HIV, nhận thông báo và được tư vấn khi kết quả xét nghiệm HIV nghi ngờ hoặc dương tính</td>
                                                    <td style="text-align: center;"><input name="dongyxet" id="dongyxetyes" value="1" type="radio"<?php if($row['xntbHIV']==1) {?> checked="checked" <?php } ?> ></td>
                                                    <td style="text-align: center;"><input name="dongyxet" id="dongyxetyes" value="0" type="radio"<?php if($row['xntbHIV']==0) {?> checked="checked" <?php } ?> ></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>