<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>

	<?php if ($this->headline): ?>
	<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>

	<table border="0" cellspacing="0" cellpadding="0" summary="Deutsche Bahn AG">
	<tr>
		<td>
			<form action="http://reiseauskunft.bahn.de/bin/query.exe/dn" name="formschnellsuche" id="formschnellsuche" method="post" target="_blank">
			<input type="hidden" value="custom" name="datesel"/>
			<input type="hidden" value="1" name="start" />
			<input type="hidden" value="depart" name="returnTimesel" />

				<table border="0" cellspacing="0" cellpadding="0" summary="bahn Online">
				<tr>
					<td><?php echo $this->bahnonline_from; ?></td>
					<td>
						<input type="text" title="<?php echo $this->bahnonline_from_alt; ?>" id="S" name="S" onclick="clearField(this);" value="<?php echo $this->bahnonline_from_input; ?>" />
					</td>
				</tr>
				<tr>
					<td><?php echo $this->bahnonline_to; ?></td>
					<td>
						<input type="text" title="<?php echo $this->bahnonline_to_alt; ?>" id="Z" name="Z" onclick="clearField(this);" value="<?php echo $this->bahnonline_to_input; ?>" />
					</td>
				</tr>
				<tr>
					<td><?php echo $this->bahnonline_date; ?></td>
					<td>
						<input type="text" value="<?php echo date("d.m.Y"); ?>" title="<?php echo $this->bahnonline_date_alt; ?>" id="date" name="date" class="setinput"/>
						&nbsp;
						<script type="text/javascript">
						<!--//--><![CDATA[//><!--
							window.addEvent('domready', function() { new Calendar({ date: 'd.m.Y' }, { navigation: 2, days: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'], months: ['Januar','Februar','M&auml;rz','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'], offset: 1, titleFormat: 'l, d. F Y' }); });
						//--><!]]>
						</script>
					</td>
				</tr>
				<tr>
					<td valign="top"><?php echo $this->bahnonline_time; ?></td>
					<td>
						<input type="text" value="<?php echo date("H:i"); ?>" title="<?php echo $this->bahnonline_time_alt; ?>" id="time" name="time" class="setinput" />
						&nbsp;
						<select name="timesel" class="setselect">
							<option selected="selected" value="depart"><?php echo $this->bahnonline_departure; ?></option>
							<option value="arrive"><?php echo $this->bahnonline_arrival; ?></option>
						</select>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td align="right"><input type="hidden" name="start" value="<?php echo $this->bahnonline_search; ?>" /><input type="submit" name="startSearch" value="<?php echo $this->bahnonline_search; ?>" class="inputbutton" /></td>
				</tr>
				</table>
			</form>
		</td>
	</tr>
	</table>

</div>
<!-- indexer::continue -->