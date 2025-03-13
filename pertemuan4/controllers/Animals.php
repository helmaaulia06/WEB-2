<?php
class Animal {
    public $animals = ["kucing","harimau","kelinci","buaya","ular"];

    function index(){
        echo "<ol>";
        foreach ($this->animals as $key => $value){
            echo "<li>$value</li>";
        }
        echo "</ol>";
    }
    function store($hewan){
        array_push($this->animals, $hewan);

        $this->index();
    }
    public function update($key, $value)
    {
        if (isset($this->animals[$key])){
           $this->animals[$key] = $value; 
            //memanggil method index
            $this->index();
        }  else{
            echo "hewan tidak ditemukan";
        }
    }
    public function destroy($key){
        if (isset($this->animals[$key])){
            unset($this->animals[$key]);
             //memanggil method index
             $this->index();
        }
    }
}
$hewan = new Animal();
echo "Index - menampilkan seluruh data hewan <br>";
$hewan->index();
echo "<br>";

echo "store - menambahkan data hewan baru (burung)<br>";
$hewan->store("burung");
echo "<br>";

echo "update - menambahkan data hewan<br>";
$hewan->update(0, "kucing anggora");
echo "<br>";

echo "destroy - menghapus data hewan<br>";
$hewan->destroy(0);
echo "<br>";
?>