<?php
// Step 1: Create an empty playlist (array of songs)
$playlist = [];

// Step 2: Function to add a song
function addSong(&$playlist, $song) {
    array_push($playlist, $song);
}

// Step 3: Function to remove a song
function removeSong(&$playlist, $song) {
    $index = array_search($song, $playlist);
    if ($index !== false) {
        unset($playlist[$index]);
        $playlist = array_values($playlist); // reindex after removal
    }
}

// Step 4: Function to display playlist
function displayPlaylist($playlist) {
    echo "🎶 Playlist Songs:<br>";
    foreach ($playlist as $index => $song) {
        echo ($index+1) . ". " . $song . "<br>";
    }
    echo "<br>";
}

// Step 5: Function to search for a song
function searchSong($playlist, $song) {
    return in_array($song, $playlist);
}

// Step 6: Function to organize playlist
function organizePlaylist(&$playlist, $mode = "sort") {
    if ($mode == "sort") {
        sort($playlist); // Alphabetical order
    } elseif ($mode == "shuffle") {
        shuffle($playlist); // Randomize
    }
}

// 🎵 Demonstration

// Add songs
addSong($playlist, "Shape of You - Ed Sheeran");
addSong($playlist, "Blinding Lights - The Weeknd");
addSong($playlist, "Levitating - Dua Lipa");
addSong($playlist, "Perfect - Ed Sheeran");

displayPlaylist($playlist);

// Remove a song
removeSong($playlist, "Levitating - Dua Lipa");
echo "After removing a song:<br>";
displayPlaylist($playlist);

// Search for a song
if (searchSong($playlist, "Perfect - Ed Sheeran")) {
    echo "✅ Found 'Perfect - Ed Sheeran' in playlist.<br><br>";
} else {
    echo "❌ Song not found.<br><br>";
}

// Sort playlist
organizePlaylist($playlist, "sort");
echo "After sorting playlist:<br>";
displayPlaylist($playlist);

// Shuffle playlist
organizePlaylist($playlist, "shuffle");
echo "After shuffling playlist:<br>";
displayPlaylist($playlist);
?>





 Output

🎶 Playlist Songs:
1. Shape of You - Ed Sheeran
2. Blinding Lights - The Weeknd
3. Levitating - Dua Lipa
4. Perfect - Ed Sheeran

After removing a song:
🎶 Playlist Songs:
1. Shape of You - Ed Sheeran
2. Blinding Lights - The Weeknd
3. Perfect - Ed Sheeran

✅ Found 'Perfect - Ed Sheeran' in playlist.

After sorting playlist:
🎶 Playlist Songs:
1. Blinding Lights - The Weeknd
2. Perfect - Ed Sheeran
3. Shape of You - Ed Sheeran

After shuffling playlist:
🎶 Playlist Songs:
1. Perfect - Ed Sheeran
2. Shape of You - Ed Sheeran
3. Blinding Lights - The Weeknd