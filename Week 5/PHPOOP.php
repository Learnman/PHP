<?phpclass Auto {    public $kleur;    public $merk;    public $brandstof;}$Celica = new Auto();$Celica->kleur = wit;$Celica->merk = toyota;$Celica->brandstof = benzine;$Mustang = new Auto();$Mustang->kleur = wit;$Mustang->merk = ford;$Mustang->brandstof = benzine;class Scooter {    public $kleur;    public $merk;    public $brandstof;    function geluid(){    echo("Hum Hum Hum, Vrrrroem Vrrooem, Huhhuhuhu Vroem Vroooem");}}$Speedfight = new Scooter();$Speedfight->kleur = blauw-grijs;$Speedfight->merk = peugeot;$Speedfight->brandstof = euro95;$Speedfight->geluid();$DT50R = new Scooter();$DT50R->kleur = blauw;$DT50R->merk = yamaha;$DT50R->brandstof = euro95;echo("<pre>");print_r($Speedfight);echo("<pre>");?>