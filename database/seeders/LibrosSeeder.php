<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


#use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $libro = new Libro();

        $libro->titulo = ''
        ....
        $libro->save();
        */

        DB::table('libros')->insert([[
                'titulo'    => 'Harry Potter y la piedra filosofal',
                'editorial' => 'Anaya',
                'autor'     => 'JK Rowling',
                'descripcion' => 'La piedra filosofal',
                'anho_publicacion'       => '2001',
                'genero'     => 'FA'
            ],
            [
                'titulo'    => 'El señor de los anillos',
                'editorial' => 'Minotauro',
                'autor'     => 'J.R.R. Tolkien',
                'descripcion' => 'La comunidad del anillo',
                'anho_publicacion'       => '1954',
                'genero'     => 'FA'
            ],
            [
                'titulo'    => 'Cien años de soledad',
                'editorial' => 'Sudamericana',
                'autor'     => 'Gabriel García Márquez',
                'descripcion' => 'Una saga familiar en Macondo',
                'anho_publicacion'       => '1967',
                'genero'     => 'RM'
            ],
            [
                'titulo'    => '1984',
                'editorial' => 'Secker & Warburg',
                'autor'     => 'George Orwell',
                'descripcion' => 'Una distopía totalitaria',
                'anho_publicacion'       => '1949',
                'genero'     => 'CF'
            ],
            [
                'titulo'    => 'Don Quijote de la Mancha',
                'editorial' => 'Planeta',
                'autor'     => 'Miguel de Cervantes',
                'descripcion' => 'Las AVs de un caballero loco',
                'anho_publicacion'       => '1605',
                'genero'     => 'NC'
            ],
            [
                'titulo'    => 'Matar a un ruiseñor',
                'editorial' => 'J.B. Lippincott & Co.',
                'autor'     => 'Harper Lee',
                'descripcion' => 'Un juicio en el sur de Estados Unidos',
                'anho_publicacion'       => '1960',
                'genero'     => 'FS'
            ],
            [
                'titulo'    => 'La sombra del viento',
                'editorial' => 'Planeta',
                'autor'     => 'Carlos Ruiz Zafón',
                'descripcion' => 'Un misterio literario en la Barcelona de posguerra',
                'anho_publicacion'       => '2001',
                'genero'     => 'SP'
            ],
            [
                'titulo'    => 'El código Da Vinci',
                'editorial' => 'Planeta',
                'autor'     => 'Dan Brown',
                'descripcion' => 'Un thriller de misterio y arte',
                'anho_publicacion'       => '2003',
                'genero'     => 'SP'
            ],
            [
                'titulo'    => 'Orgullo y prejuicio',
                'editorial' => 'Penguin Classics',
                'autor'     => 'Jane Austen',
                'descripcion' => 'La relación entre Elizabeth Bennet y Darcy',
                'anho_publicacion'       => '1813',
                'genero'     => 'RO'
            ],
            [
                'titulo'    => 'Frankenstein',
                'editorial' => 'Lackington, Hughes, Harding, Mavor & Jones',
                'autor'     => 'Mary Shelley',
                'descripcion' => 'El monstruo creado por un científico loco',
                'anho_publicacion'       => '1818',
                'genero'     => 'TE'
            ],
            [
                'titulo'    => 'El gran Gatsby',
                'editorial' => 'Charles Scribner\'s Sons',
                'autor'     => 'F. Scott Fitzgerald',
                'descripcion' => 'Un estudio sobre el sueño americano',
                'anho_publicacion'       => '1925',
                'genero'     => 'TR'
            ],
            [
                'titulo'    => 'El alquimista',
                'editorial' => 'HarperOne',
                'autor'     => 'Paulo Coelho',
                'descripcion' => 'Una historia sobre la búsqueda de los sueños',
                'anho_publicacion'       => '1988',
                'genero'     => 'FF'
            ],
            [
                'titulo'    => 'Los pilares de la tierra',
                'editorial' => 'Plaza & Janés',
                'autor'     => 'Ken Follett',
                'descripcion' => 'Una historia épica en la Edad Media',
                'anho_publicacion'       => '1989',
                'genero'     => 'HT'
            ],
            [
                'titulo'    => 'La cabaña',
                'editorial' => 'Grupo Nelson',
                'autor'     => 'William P. Young',
                'descripcion' => 'La reflexión de un hombre tras una TR',
                'anho_publicacion'       => '2007',
                'genero'     => 'RL'
            ],
            [
                'titulo'    => 'El principito',
                'editorial' => 'Reynal & Hitchcock',
                'autor'     => 'Antoine de Saint-Exupéry',
                'descripcion' => 'Una fábula sobre la importancia de lo esencial',
                'anho_publicacion'       => '1943',
                'genero'     => 'FA'
            ],
            [
                'titulo'    => 'La isla del tesoro',
                'editorial' => 'Cassell & Co.',
                'autor'     => 'Robert Louis Stevenson',
                'descripcion' => 'La AV de un joven en busca de un tesoro',
                'anho_publicacion'       => '1883',
                'genero'     => 'AV'
            ],
            [
                'titulo'    => 'Crimen y castigo',
                'editorial' => 'The Russian Messenger',
                'autor'     => 'Fiódor Dostoyevski',
                'descripcion' => 'El dilema moral de un joven estudiante',
                'anho_publicacion'       => '1866',
                'genero'     => 'PS'
            ],
            [
                'titulo'    => 'El retrato de Dorian Gray',
                'editorial' => 'Ward, Lock & Co.',
                'autor'     => 'Oscar Wilde',
                'descripcion' => 'La historia de un hombre que no envejece',
                'anho_publicacion'       => '1890',
                'genero'     => 'FG'
            ],
            [
                'titulo'    => 'La odisea',
                'editorial' => 'Varios',
                'autor'     => 'Homero',
                'descripcion' => 'Las AVs de Ulises en su regreso a casa',
                'anho_publicacion'       => '100',
                'genero'     => 'EP'
            ],
            [
                'titulo'    => 'El titulo de la rosa',
                'editorial' => 'Ediciones Planeta',
                'autor'     => 'Umberto Eco',
                'descripcion' => 'Un asesinato en un monasterio medieval',
                'anho_publicacion'       => '1980',
                'genero'     => 'HT'
            ],
            [
                'titulo'    => 'Los juegos del hambre',
                'editorial' => 'Scholastic Press',
                'autor'     => 'Suzanne Collins',
                'descripcion' => 'Un reality mortal en un futuro distópico',
                'anho_publicacion'       => '2008',
                'genero'     => 'CF'
            ],
            [
                'titulo'    => 'El Hobbit',
                'editorial' => 'George Allen & Unwin',
                'autor'     => 'J.R.R. Tolkien',
                'descripcion' => 'La AV de Bilbo Bolsón',
                'anho_publicacion'       => '1937',
                'genero'     => 'FA'
            ],
            [
                'titulo'    => 'El lobo estepario',
                'editorial' => 'S. Fischer Verlag',
                'autor'     => 'Hermann Hesse',
                'descripcion' => 'Un hombre dividido entre dos mundos',
                'anho_publicacion'       => '1927',
                'genero'     => 'PS'
            ],
            [
                'titulo'    => 'La divina comedia',
                'editorial' => 'Varios',
                'autor'     => 'Dante Alighieri',
                'descripcion' => 'Un viaje a través del Infierno, el Purgatorio y el Paraíso',
                'anho_publicacion'       => '1320',
                'genero'     => 'PE'
            ],
            [
                'titulo'    => 'El diario de Ana Frank',
                'editorial' => 'Contact Publishing',
                'autor'     => 'Ana Frank',
                'descripcion' => 'El testimonio de una niña judía en la Segunda Guerra Mundial',
                'anho_publicacion'       => '1947',
                'genero'     => 'MM'
            ],
            [
                'titulo'    => 'La carretera',
                'editorial' => 'Knopf',
                'autor'     => 'Cormac McCarthy',
                'descripcion' => 'Un padre y su hijo en un mundo PA',
                'anho_publicacion'       => '2006',
                'genero'     => 'PA'
            ],
            [
                'titulo'    => 'Rayuela',
                'editorial' => 'Editorial Sudamericana',
                'autor'     => 'Julio Cortázar',
                'descripcion' => 'Una novela que puede leerse en distintos órdenes',
                'anho_publicacion'       => '1963',
                'genero'     => 'LA'
            ],
            [
                'titulo'    => 'La metamorfosis',
                'editorial' => 'Kurt Wolff Verlag',
                'autor'     => 'Franz Kafka',
                'descripcion' => 'Un hombre se convierte en insecto',
                'anho_publicacion'       => '1915',
                'genero'     => 'FC'
            ] 
        ]        
        );
    }
}