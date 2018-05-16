<?php
	
$prodi = [
			[
				"id"=>0,
				"nama"=>"kimia",
				"kuota"=>12,
				"kaprodi"=>"Andi",
			],

			[
				"id"=>1,
				"nama"=>"fisika",
				"kuota"=>14,
				"kaprodi"=>"Nurhasanah",
			],

			[
				"id"=>2,
				"nama"=>"biologi",
				"kuota"=>12,
				"kaprodi"=>"Rizalinda",
			],

			[
				"id"=>3,
				"nama"=>"sisfo",
				"kuota"=>32,
				"kaprodi"=>"Ilham",
			],

			[
				"id"=>4,
				"nama"=>"kelautan",
				"kuota"=>11,
				"kaprodi"=>"Nora",
			],

			[
				"id"=>5,
				"nama"=>"statistika",
				"kuota"=>15,
				"kaprodi"=>"Naomi",
			],

			[
				"id"=>6,
				"nama"=>"matematika",
				"kuota"=>12,
				"kaprodi"=>"Mariatul",
			],


	];
		
		echo $prodi[1]['nama'];
		echo "<br><p>";
		echo $prodi[2]['kuota'];
		echo "<br><p>";
		echo $prodi[3]['kaprodi'];
		echo "<br><p>";

		$nama = true;
		echo "<pre>";
		var_dump($prodi);
		echo "</pre>";


?>

