<?php
include 'config.php';
$result = mysqli_query($con, "SELECT * FROM elements ORDER BY atomic_number ASC");


$menu = [
    "Map" => "map.php",
    "School" => "school.php",
    // "School" => [
    //     "Physics" => "school_physics.php",
    //     "Chemistry" => "school_chemistry.php",
    //     "Maths" => "school_maths.php",
    //     "Biology" => "school_biology.php",
    //     "Evolution and Timeline" => "evolution_and_timeline.php"
    // ],
    "Degrees" => [
        "Bachelors" => "degrees_bachelors.php",
        "Masters" => "degrees_masters.php",
        "PHD" => "degrees_phd.php",
        "Professional / Diploma / Certificate" => "degrees_professional.php"
    ],
    "Industries" => [
        "Science" => [
            "Physics" => "industries_science_physics.php",
            "Chemistry" => "industries_science_chemistry.php",
            "Maths" => "industries_science_maths.php",
            "Biology" => "industries_science_biology.php"
        ],
        "Department" => "department.php",
    ],
    "Market Research" => [
        "Market Research" => "market_research.php"

    ],
    "Manufacturing" => [

    ],
    "Production" => [
    ],
    "GOI" => [
        "Ministry of Education" => "#",
        "Ministry of Health" => "#",
        "Ministry of Neuclear" => "#",
        "Ministry of Space" => "#",
        "Ministry of Science and Technology" => "#",
        "Ministry of Finance" => "#"
    ],
    "Reverse The Process" => "reverse_process.php",
];



?>


<nav>
    <ul>
        <?php
        function renderMenu($menu)
        {
            foreach ($menu as $key => $value) {
                echo "<li>";
                if (is_array($value)) {
                    // Parent menu item: you can keep href="#" or assign URL if needed
                    echo "<a href='#'>$key</a>";
                    echo "<ul>";
                    renderMenu($value); // recursive call
                    echo "</ul>";
                } else {
                    // Leaf node: $value is the URL
                    echo "<a href='$value'>$key</a>";
                }
                echo "</li>";
            }
        }


        renderMenu($menu);
        ?>
    </ul>
</nav>


<?php
function pageDepth($items){
    $reverse = array_reverse($items);
    echo '<div class="page-depth">';

    // UP LINKS
    echo '<div class="depth-up">';
    foreach ($reverse as $k => $item) {
        if ($k === 0) continue; // skip current page
        echo '<a href="'.$item['url'].'">↑ '.$item['title'].'</a>';
    }
    echo '</div>';

    // CURRENT PAGE
    echo '<div class="depth-current">';
    echo end($items)['title'];
    echo '</div>';

    echo '</div>';
}
?>

