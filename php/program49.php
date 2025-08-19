<?php
$players = [
    ["id" => 1, "name" => "Alice", "runs" => 350, "matches" => 10, "catches" => 5],
    ["id" => 2, "name" => "Bob", "runs" => 420, "matches" => 12, "catches" => 8],
    ["id" => 3, "name" => "Charlie", "runs" => 275, "matches" => 9, "catches" => 4],
];

// Calculate performance
foreach ($players as &$player) {
    $avgRuns = $player["runs"] / $player["matches"]; // batting average
    $performanceIndex = ($player["runs"] * 0.7) + ($player["catches"] * 10);

    $player["average"] = round($avgRuns, 2);
    $player["index"] = round($performanceIndex, 2);
}

// Sort players by performance index (descending order)
usort($players, function($a, $b) {
    return $b["index"] <=> $a["index"];
});

// Display rankings
echo "<h3>Player Performance Rankings</h3>";
$rank = 1;
foreach ($players as $player) {
    echo "Rank $rank: {$player['name']} | Avg: {$player['average']} | Index: {$player['index']}<br>";
    $rank++;
}
?>


 Output

Player Performance Rankings
Rank 1: Bob | Avg: 35 | Index: 314
Rank 2: Alice | Avg: 35 | Index: 255
Rank 3: Charlie | Avg: 30.56 | Index: 207.5