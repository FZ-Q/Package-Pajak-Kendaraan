# Welcome to StackEdit!

Hi! I'm your first Markdown file in **StackEdit**. If you want to learn about StackEdit, you can read me. If you want to play with Markdown, you can edit me. Once you have finished with me, you can create new files by opening the **file explorer** on the left corner of the navigation bar.


# Installasi Package

**composer require syfmi/perhitunganpajakkendaraanbermotor**

## Pengaturan composer.json

    "autoload": {
		"psr-4": {
		    "PerhitunganPajakKendaranBermotor\\":  "vendor/syfmi/perhitunganpajakkendaraanbermotor/src"
		}
	 }

## Penggunaan

    use PerhitunganPajakKendaranBermotor\PajakKendaraan;

    public  function  FunctionName(){
	    $param =  PajakKendaraan::nameFunction($param);
	}

## Daftar Fungsi

**!!!**
$type merupakan tipe kendaraan dengan tipe data string yaitu:
-   motor
-   mobil

$param adalah nilai jual kendaraan dengan tipe data integer.
<hr>

**Informasi**

 1. informasiBiayaAdministrasi($type)
 2. informasiPresentasePajak($type)

**Pajak**

 1. pajakTahunPertama($type, $param) 
 2. pajakSatuTahunan($type, $param) 
 3. pajakLimaTahunan($type, $param)

**Denda**

 1. dendaSatuBulan($type, $param) 
 2. dendaDuaBulan($type, $param) 
 3. dendaEnamBulan($type, $param) 
 4. dendaSatuTahun($type, $param) 
 5. dendaDuaTahun($type, $param)
<hr>
