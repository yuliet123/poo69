<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Files</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="min-h-[100vh] flex justify-center items-center text-white">
    <main class="w-[380px] h-[600px] bg-white/20 rounded">
        <header class="flex gap-4 justify-center items-center border-b border-yellow-100 border-dashed pb-2">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-red-200 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl"> 01-class</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <?php 
           class vehicle {
            //atributos
            public $brand;
            public $refer;
            public $model;
            public $color;

            public function setAttributes($brand, $refer, $model, $color){
                $this->brand = $brand;
                $this->refer = $refer;
                $this->model = $model;
                $this->color = $color;



            }

            public function getAttributes() {
                return "<div class='p-4 ring-1  ring-white/50 rounded-md'>
                <p><strong>brand: </strong>$this->brand</p>
                <p><strong>reference: </strong>$this->refer</p>
                <p><strong>model: </strong>$this->model</p>
                <p><strong>color: </strong>$this->color</p>
                </div>";
              

            }



           }

           //create an objetc 

           $vehicle1 = new vehicle;
           $vehicle1->setAttributes('volswagen', 'tiguan', '2023', 'SpaceGray');
           echo $vehicle1->getAttributes();


           $vehicle2 = new vehicle;
           $vehicle2->setAttributes('twingo', 'renault', '2023', 'white');
           echo $vehicle2->getAttributes();

           $vehicle3 = new vehicle;
           $vehicle3->setAttributes('twingo', 'renault', '2021', 'red');
           echo $vehicle3->getAttributes();
           // Access attributes

            ?>

            
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>