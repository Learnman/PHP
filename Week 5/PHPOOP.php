<?phpclass Auto {    public $kleur;    public $merk;    public $brandstof;}$Celica = new Auto();$Celica->kleur = wit;$Celica->merk = toyota;$Celica->brandstof = benzine;$Mustang = new Auto();$Mustang->kleur = wit;$Mustang->merk = ford;$Mustang->brandstof = benzine;class Brommer {    public $kleur;    public $merk;    public $brandstof;    public $schakelen;    function geluid(){    echo("Hum Hum Hum, Vrrrroem Vrrooem, Huhhuhuhu Vroem Vroooem");}}$Speedfight = new Brommer();$Speedfight->kleur = blauw-grijs;$Speedfight->merk = peugeot;$Speedfight->brandstof = euro95;$Speedfight->schakelen = automatisch;$Speedfight->geluid();$DT50R = new Brommer();$DT50R->kleur = blauw;$DT50R->merk = yamaha;$DT50R->brandstof = euro95;$DT50R->schakelen = handgeschakeld;echo("<pre>");print_r($Speedfight);echo("<pre>");?>