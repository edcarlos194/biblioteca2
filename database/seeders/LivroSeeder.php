<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'ano_publicacao' => 1949,
            'resumo' => 'Um clássico da literatura distópica.',
        ]);

        Livro::create([
            'titulo' => 'Dom Casmurro',
            'autor' => 'Machado de Assis',
            'ano_publicacao' => 1899,
            'resumo' => 'Um dos maiores romances da literatura brasileira.',
        ]);
        
        Livro::create([
            'titulo' => 'A Revolução dos Bichos',
            'autor' => 'George Orwell',
            'ano_publicacao' => 1945,
            'resumo' => 'Uma sátira política sobre uma fazenda onde os animais se revoltam.',
        ]);
        
        Livro::create([
            'titulo' => 'Moby Dick',
            'autor' => 'Herman Melville',
            'ano_publicacao' => 1851,
            'resumo' => 'A saga de um capitão obcecado por caçar uma enorme baleia branca.',
        ]);
        
        Livro::create([
            'titulo' => 'O Pequeno Príncipe',
            'autor' => 'Antoine de Saint-Exupéry',
            'ano_publicacao' => 1943,
            'resumo' => 'Um clássico que explora o valor da amizade e da imaginação.',
        ]);
        
        Livro::create([
            'titulo' => 'Cem Anos de Solidão',
            'autor' => 'Gabriel García Márquez',
            'ano_publicacao' => 1967,
            'resumo' => 'A história da família Buendía na fictícia cidade de Macondo.',
        ]);
        
        Livro::create([
            'titulo' => 'O Conde de Monte Cristo',
            'autor' => 'Alexandre Dumas',
            'ano_publicacao' => 1844,
            'resumo' => 'Uma aventura épica de vingança e redenção.',
        ]);
        
        Livro::create([
            'titulo' => 'Orgulho e Preconceito',
            'autor' => 'Jane Austen',
            'ano_publicacao' => 1813,
            'resumo' => 'Um romance que examina as questões de moralidade e casamento na sociedade britânica.',
        ]);
        
        Livro::create([
            'titulo' => 'A Divina Comédia',
            'autor' => 'Dante Alighieri',
            'ano_publicacao' => 1320,
            'resumo' => 'Uma jornada alegórica pelo Inferno, Purgatório e Paraíso.',
        ]);
        
        Livro::create([
            'titulo' => 'A Metamorfose',
            'autor' => 'Franz Kafka',
            'ano_publicacao' => 1915,
            'resumo' => 'A história de Gregor Samsa, que se transforma em um inseto.',
        ]);
        
        Livro::create([
            'titulo' => 'O Apanhador no Campo de Centeio',
            'autor' => 'J.D. Salinger',
            'ano_publicacao' => 1951,
            'resumo' => 'Uma narrativa sobre a adolescência e a alienação.',
        ]);
        
        Livro::create([
            'titulo' => 'O Hobbit',
            'autor' => 'J.R.R. Tolkien',
            'ano_publicacao' => 1937,
            'resumo' => 'A jornada de Bilbo Bolseiro em uma aventura épica na Terra Média.',
        ]);
        
    }
}
