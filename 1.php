<html>
<head>
	<title>Soal No 1</title>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 120px;
			cursor: pointer;
		}
		label {
			width: 120px;
			display: block;
			float: left;
		}
		.checkbox, .radio {
			float:none;
			width: auto;
		}
		.row::after {
			content: "";
			display: block;
			clear:both;
		}
		.row {
			margin-bottom: 5px;
			clear: both;
		}
		.options {
			float:left;
		}
	</style>
</head>
<body>
	<h1>Formulir Biodata Dumbways</h1>
	<form action="" method="post">
		<div class="row">
			<label>Nama Lengkap</label>
			<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
		</div>
		<div class="row">
			<label>Tempat Lahir</label>
			<select name="area">
				<?php $options = array('Jakarta', 'Bogor', 'Depok', 'Tangerang', 'Bekasi');
				foreach ($options as $area) {
					$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
					echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
				}?>
			</select>
		</div>

		<div class="row">
			<label>Tanggal Lahir</label>
			<input type="date" name="date" value="<?=isset($_POST['date']) ? $_POST['date'] : ''?>"/>
		</div>
		<div class="row">
			<label>No Hp</label>
			<input type="text" name="no_hp" value="<?=isset($_POST['nao_hp']) ? $_POST['no_hp'] : ''?>"/>
		</div>
				<div class="row">
			<label>Alamat</label>
			<input type="textarea" name="textarea" value="<?=isset($_POST['textarea']) ? $_POST['textarea'] : ''?>"/>
		</div>
		<div class="row">
			<label>Pendidikan Terakhir</label>
			<select name="pendidikan">
				<?php $options = array('SD', 'SMP', 'SMA', 'D1', 'D3','S1','S2','S3');
				foreach ($options as $pendidikan) {
					$selected = @$_POST['pendidikan'] == $area ? ' selected="selected"' : '';
					echo '<option value="' . $pendidikan . '"' . $selected . '>' . $pendidikan . '</option>';
				}?>
			</select>
		</div>		
		<div class="row">
			<label>Agama</label>
			<div class="options">
				<?php
				$agama = array('IS' => 'Islam', 'KR' => 'Kristen','KA' => 'Katolik');
				foreach ($agama as $kode => $detail) {
					$checked = @$_POST['agama'] == $kode ? ' checked="checked"' : '';
					echo '<label class="radio">
							<input name="agama" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
						</label>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<label>Hobi</label>
			<div class="options">
				<?php 
				$program = array('Renang', 'Mancing', 'Game', 'Gibah', 'Programming');
				foreach ($program as $skill) {
					$checked = isset($_POST['hobi' . $skill]) ? ' checked="checked"' : '';
					echo '<label class="checkbox">
							<input type="checkbox" name="hobi' . $skill . '"' . $checked . '>' . $skill . 
						'</label>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Simpan"/>
		</div>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		echo '<h1>Hasil Input</h1>';
		echo '<ul>';
		
		echo '<li>Nama: ' . $_POST['nama'] . '</li>';
		echo '<li>Tempat Lahir: ' . $_POST['area'] . '</li>';
		echo '<li>Tanggal Lahir: ' . $_POST['date'] . '</li>';
		echo '<li>No Hp: ' . $_POST['no_hp'] . '</li>';
		echo '<li>Alamat: ' . $_POST['textarea'] . '</li>';
		echo '<li>Pendidikan: ' . $_POST['pendidikan'] . '</li>';
		echo '<li>Agama: ' . (isset($_POST['agama']) ? $agama[$_POST['agama']] : '-') . '</li>';
		
		$list_skill = array();
		foreach ($program as $skill) {
			if ( isset($_POST['hobi' . $skill]) )
			{
				$list_skill[] = $skill;
			}
		}

		echo '<li>Skill: ' . ($list_skill ? join($list_skill, ', ') : '-') . '</li>';
		echo '</ul>';
	}?>
</body>
</html>