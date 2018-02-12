<div class="cpp-b_program-day">
	<div class="cpp-r_wrap">
		<div class="date">
			<?php echo $day ?>
		</div>
		<!-- Prorgam table -->
		<table>
			<tbody>
				<tr>
					<th></th>
					<?php 
					sort($tracks);
					foreach ($tracks as $track)
						echo "<th>".$track."</th>";
					?>
				</tr>
				<?php
				$prefix = $GLOBALS['prefix'];
				$locale = get_locale();
				foreach ($timeArr as $time) {
					$classSet = false;
					$output = "";
					$firstTr = "<tr";
					$timeCol = ">\n<td>".$time."</td>\n";
					$rowsText = "";
					$rows = [];
					foreach ($schedule[$day][$time] as $data) {
						$colspan = property_exists($data->talk, 'colspan') ? $data->talk->colspan : 1;
						$rowText = '';
						if ($colspan > 1)
							$rowText .= '<td colspan="'.$data->talk->colspan.'">';
						else
							$rowText .= '<td>';
						if (!$data->system) {
						    $imgs = '';
						    if ($locale == "ru") {
                                $speaker_name = $data->speaker->name;
                                if (property_exists($data->talk, "language") && $data->talk->language == "english")
                                    $imgs = '<img src="/app/build/template/eng.png" title="Доклад на английском языке">';
                            } else {
                                $speaker_name = transliterator_transliterate('Cyrillic-Latin', $data->speaker->name);
                                if (!property_exists($data->talk, "language") || $data->talk->language != "english")
                                    $imgs = '<img src="/app/build/template/rus.png" title="Talk is in Russian">';
                            }
                            $skype = '';
                            if (property_exists($data->talk, "skype") && $data->talk->skype)
                                $imgs = $imgs . '<img src="/app/build/template/skype.png" title="' . tr("skype talk") . '">';

                            $rowText .= '<span class="speaker">' . $speaker_name . '</span>'.'<a class="talk-link" href=".'
                                .$prefix.'/talks/'.$data->speaker->dirname.'">'.$data->talk->title.'</a>'.$imgs.'</td>'."\n";
							$rows[$data->talk->track] = $rowText;
						}
						else {
							$rowsText .= $rowText . tr($data->talk->text)."</td>\n";
						}
						if (property_exists($data->talk, "class") && !$classSet) {
							$firstTr .= ' class = "'.$data->talk->class.'"';
							$classSet = true;
						}
					}
					if (!$data->system) {
						foreach ($tracks as $track)
							$rowsText .= $rows[$track];
					}
					
					$closeTr = "</tr>\n";
					echo $firstTr.$timeCol.$rowsText.$closeTr;
				}
				?>
			</tbody>
		</table>
		<!-- /Prorgam table -->
	</div>
</div> 
