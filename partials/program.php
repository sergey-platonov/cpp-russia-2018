<!-- Программа -->
<section class="cpp-b_section">
    <div class="cpp-r_wrap">
        <div class="cpp-b_sidetext cpp-b_responsive-row-cols">
            <a name="program" class="cpp-e_hash-link"></a>
            <div class="sidetext-left row-col">
            </div>
            <div class="sidetext-right row-col">
                <h2 class="cpp-e_block-title">
                    Программа
                </h2>
                <div class="cpp-b_block-text cpp-b_only-desktop">
                    <p>После регистрации и вводной лекции вся программа идёт на трёх треках параллельно. После конференции на нашем сайте можно будет посмотреть слайды и видео докладов.<br>
                        Программа второго дня публикуется по мере приёма заявок
                    </p>
                </div>
            </div>
        </div>
    </div>
        <div class="cpp-b_program-day">
        <div class="cpp-r_wrap">
            <div class="date">
                19/04/18
            </div>
            <!-- Workshop prorgam table -->
            <?php 
              $ivanTitle = getWorkshopTitle($GLOBALS["prefix"], "workshops/ivan-cukic");
              $rainerTitle = getWorkshopTitle($GLOBALS["prefix"], "workshops/rainer-grimm"); 
              $pavelTitle = getWorkshopTitle($GLOBALS["prefix"], "workshops/pavel-filonov");
            ?>
            <table>
                <tbody>
                <tr>
                    <th></th>
                    <th><?php echo $ivanTitle ?></th>
                    <th><?php echo $rainerTitle ?></th>
                    <th><?php echo $pavelTitle ?></th>
                </tr>
                <tr class="gray">
                    <td>9:00 - 10:00</td>
                    <td colspan="3">Регистрация на мастер-классы</td>
                </tr>
                <tr>
                    <td>10:00 - 12:00</td>
                    <td><?php echo $ivanTitle ?> I</td>
                    <td><?php echo $rainerTitle ?> I</td>
                    <td><?php echo $pavelTitle ?> I</td>
                </tr>
                <tr class="gray">
                    <td>12:00 - 12:45</td>
                    <td colspan="3">Кофе-брейк</td>
                </tr>
                <tr>
                    <td>12:45 - 14:45</td>
                    <td><?php echo $ivanTitle ?> II</td>
                    <td><?php echo $rainerTitle ?> II</td>
                    <td><?php echo $pavelTitle ?> II</td>
                </tr>
                <tr class="gray">
                    <td>14:45 - 16:00</td>
                    <td colspan="3">Обед</td>
                </tr>
                <tr>
                    <td>16:00 - 18:00</td>
                    <td><?php echo $ivanTitle ?> III</td>
                    <td><?php echo $rainerTitle ?> III</td>
                    <td><?php echo $pavelTitle ?> III</td>
                </tr>
                <tr class="gray">
                    <td>18:00 - 20:00</td>
                    <td colspan="3">Предрегистрация на конференцию</td>
                </tr>
                </tbody>
            </table>
            <!-- /Workshop prorgam table -->
        </div>
    </div>
	<?php renderMainProgram($GLOBALS['project_root']); ?>
</section>
<!-- /Программа -->
