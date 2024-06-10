<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourista a la playa</title>
    <style>
        .turista {
            font-size: 35px;
            margin-bottom: 20px;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
        }
        header, footer {
            width: 100%;
            background-color: rgba(2, 190, 77, 0.84);
            color: white;
            padding: 8px ;
            text-align: center;
        }
        #container {
            display: grid;
            width: 80%;
            margin: 20px auto;
            margin-top: 55px;
        }
        #addon, #tabelka {
            width: 100%;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            background-color: #ffffff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: rgba(2, 190, 77, 0.84);
            text-align: left;
        }
        th, td {
            border: 1px solid #bbb9b9;
            padding: 8px;
        }
        th {
            background-color: rgba(2, 190, 77, 0.84);
            text-align: left;
        }
        h1 {
            text-align: center;
            margin: 0;
            font-size: 25px;
        }
        .form-section {
            margin-bottom: 20px;
        }
        input[type="submit"]:hover {
            background-color: darkgreen;
        }
        input[type="text"], input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: rgba(2, 190, 77, 0.84);
            color: white;
            padding: 10px;
            margin: 5px 0;
            border: none;
            cursor: pointer;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav li {
            color: rgba(2, 190, 77, 0.84);
            background-color: #f2f2f2;
            display: inline;
            padding: 10px;
            border-radius: 7px;
            margin: 6px;
        }
        nav li:hover {
            background-color: aquamarine;
        }
        nav a {
            text-decoration: none;
            color: #0eaf0e;
        }
        #report-container {
            display: grid;
            place-items: center;
            text-align: center;
            justify-content: center;
            margin-top: 20px;
        }

    </style>
</head>
<body>
<header>
    <h1 class="turista">Tourist Places</h1>
    <nav>
        <ul>
            <li>
                <a href="?page=add">Add Place</a>
            </li>
            <li>
                <a href="?page=sort">Sort by Place Name</a>
            </li>
            <li>
                <a href="?page=report">Generate Report</a>
            </li>
            <li>
                <a href="?page=recommendation">Get a Recommendation</a>
            </li>
        </ul>
    </nav>
</header>
<div id="container">
    <?php
    session_start();
    class TouristPlace {
        private $ID;
        private $PlaceName;
        private $Location;
        private $Category;
        private $OpeningYear;
        private $VisitorsPerYear;
        private $Rating;

        public function __construct($ID, $PlaceName, $Location, $Category, $OpeningYear, $VisitorsPerYear, $Rating) {
            $this->ID = $ID;
            $this->PlaceName = $PlaceName;
            $this->Location = $Location;
            $this->Category = $Category;
            $this->OpeningYear = $OpeningYear;
            $this->VisitorsPerYear = $VisitorsPerYear;
            $this->Rating = $Rating;
        }
        public function getID() {
            return $this->ID;
        }
        public function getPlaceName() {
            return $this->PlaceName;
        }
        public function getLocation() {
            return $this->Location;
        }
        public function getCategory() {
            return $this->Category;
        }
        public function getOpeningYear() {
            return $this->OpeningYear;
        }
        public function getVisitorsPerYear() {
            return $this->VisitorsPerYear;
        }
        public function getRating() {
            return $this->Rating;
        }
        public function setPlaceName($PlaceName) {
            $this->PlaceName = $PlaceName;
        }
        public function setLocation($Location) {
            $this->Location = $Location;
        }
        public function setCategory($Category) {
            $this->Category = $Category;
        }
        public function setOpeningYear($OpeningYear) {
            $this->OpeningYear = $OpeningYear;
        }
        public function setVisitorsPerYear($VisitorsPerYear) {
            $this->VisitorsPerYear = $VisitorsPerYear;
        }
        public function setRating($Rating) {
            $this->Rating = $Rating;
        }
    }
    function loadTouristsFromCSV($filename) {
        $tourists = [];
        if (($handle = fopen($filename, "r")) !== FALSE) {
            fgetcsv($handle);
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $tourists[] = new TouristPlace($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6]);
            }
            fclose($handle);
        } else {
            echo "File opening error";
        }
        return $tourists;
    }


    if (!isset($_SESSION['tourists'])) {
        $_SESSION['tourists'] = [];
    }
    $tourists = $_SESSION['tourists'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['add_place'])) {
            $newTourist = new TouristPlace($_POST['ID'], $_POST['PlaceName'], $_POST['Location'], $_POST['Category'], $_POST['OpeningYear'], $_POST['VisitorsPerYear'], $_POST['Rating']);
            $tourists[] = $newTourist;
            $_SESSION['tourists'] = $tourists;
        }
    }

    function displayTouristsTable($tourists) {
        echo "<table>";
        echo "<tr>
                <th>Place Name</th>
                <th>Location</th>
                <th>Category</th>
                <th>Opening Year</th>
                <th>Visitors Per Year</th>
                <th>Rating</th>
                <th>Action</th>
        </tr>";
        foreach ($tourists as $tourist) {
            echo "<tr>
                    <td>{$tourist->getPlaceName()}</td>
                    <td>{$tourist->getLocation()}</td>
                    <td>{$tourist->getCategory()}</td>
                    <td>{$tourist->getOpeningYear()}</td>
                    <td>{$tourist->getVisitorsPerYear()}</td>
                    <td>{$tourist->getRating()}</td>
                    <td>
                    <form method='post' action=''>
                        <input type='submit' value='Edit' name='edit'>
                    </form>
                </td>
                </tr>";
        }
        echo "</table>";
    }

    $page = isset($_GET['page']) ? $_GET['page'] : 'list';

    if ($page == 'add') {
        ?>
        <div id="addon">
            <div class="form-section">
                <h2>Add New Tourist Place</h2>
                <form method="post" action="">
                    <label>ID:</label><br>
                    <input type="number" name="ID" required><br>
                    <label>Place Name:</label><br>
                    <input type="text" name="PlaceName" required><br>
                    <label>Location:</label><br>
                    <input type="text" name="Location" required><br>
                    <label>Category:</label><br>
                    <input type="text" name="Category" required><br>
                    <label>Opening Year:</label><br>
                    <input type="number" name="OpeningYear" required><br>
                    <label>Visitors Yearly:</label><br>
                    <input type="number" name="VisitorsPerYear" required><br>
                    <label>Rating:</label><br>
                    <input type="number" name="Rating" step="0.1"required><br><br>
                    <input type="hidden" name="add_place" value="1">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <?php
    } elseif ($page == 'sort') {

        usort($tourists, function($a, $b) {

            return strcmp($a->getPlaceName(), $b->getPlaceName());
        });
        displayTouristsTable($tourists);
    } elseif ($page == 'report') {

    $category_counts = [];
    $category_visitors = [];
    $region_stats = [];

    foreach ($tourists as $tourist) {
        $category = $tourist->getCategory();
        $location = $tourist->getLocation();
        $visitors = $tourist->getVisitorsPerYear();
        //reffr
        if (isset($category_counts[$category])) {
            $category_counts[$category]++;
        } else {
            $category_counts[$category] = 1;
        }

        if (isset($category_visitors[$category])) {
            $category_visitors[$category] += $visitors;
        } else {
            $category_visitors[$category] = $visitors;
        }
        if (isset($region_stats[$location][$category])) {
            $region_stats[$location][$category]++;
        } else {
            $region_stats[$location][$category] = 1;
        }
    }

    echo "<div id='report-container'>";

    echo "<h2 style='color: #0eaf0e'> Category Statistics</h2>";
    foreach ($category_counts as $category => $count) {
        $average_visitors = $category_visitors[$category] / $count;
        echo "<div class='category-stats'>";
        echo "<p>$category: $count</p>";
        echo "</div>";
    }

    echo "<h2 style='color: #0eaf0e'>Region Statistics</h2>";
    foreach ($region_stats as $location => $categories) {
        echo "<div class='region-stats'>";
        echo "<h3>$location</h3>";
        foreach ($categories as $category => $count) {
            echo "<p>$category: $count</p>";
        }
        echo "</div>";
    }

    $total_visitors = array_sum($category_visitors);
    $total_places = count($tourists);
    $average_visitors_per_year = $total_visitors / $total_places;
    $avg_vis = round($average_visitors_per_year,2);
    echo "<h2 style='color: #0eaf0e'>Average Visitors Yearly</h2>";
    echo "<p>$avg_vis million</p>";

    echo "</div>";

    } elseif ($page == 'recommendation') {
        $recommended_places = array_filter($tourists, function($tourist) {
            return $tourist->getRating() > 8.0;
        });
        if (count($recommended_places) > 0) {
            $recommended_place = reset($recommended_places); //1tab
            echo "<div>";
            echo "<p><strong>Place Name:</strong> {$recommended_place->getPlaceName()}</p>";
            echo "<p><strong>Location:</strong> {$recommended_place->getLocation()}</p>";
            echo "<p><strong>Category:</strong> {$recommended_place->getCategory()}</p>";
            echo "<p><strong>Opening Year:</strong> {$recommended_place->getOpeningYear()}</p>";
            echo "<p><strong>Visitors Per Year:</strong> {$recommended_place->getVisitorsPerYear()}</p>";
            echo "<p><strong>Rating:</strong> {$recommended_place->getRating()}</p>";
            echo "</div>";
        } else {
            echo "<p>We couldn't find any places with a rating over 8.</p>";
        }
    } else {
        displayTouristsTable($tourists);
    }

    ?>
</div>
<footer>
    <p>&copy; 2024 Choose your own DESTINATION!</p>
</footer>
</body>
</html>
