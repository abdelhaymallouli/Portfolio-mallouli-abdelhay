<?php
namespace App\Services;

class TechnologiesService
{
    public function getTechnologies()
    {
        return [
            1 => 'HTML5',
            2 => 'CSS3',
            3 => 'JavaScript',
            4 => 'PHP',
            5 => 'Laravel',
            6 => 'MySQL',
            7 => 'Python',
            8 => 'Django',
            9 => 'React',
            10 => 'Node.js',
            11 => 'Git & GitHub',
            12 => 'REST APIs',
            13 => 'Responsive Design',
            14 => 'Agile Methodology',
        ];
    }

    public function getNamesByIds(array $ids)
    {
        $technologies = $this->getTechnologies();
        $names = [];
        foreach ($ids as $id) {
            if (isset($technologies[$id])) {
                $names[] = $technologies[$id];
            }
        }
        return $names;
    }
}
?>