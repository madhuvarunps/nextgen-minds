<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmfleet - Find Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F5F5F0] font-sans">

    <!-- Navigation Bar -->
    <nav class="bg-white p-4 shadow-md flex justify-between items-center">
        <h1 class="text-2xl font-bold text-[#2E7D32]">Farmfleet</h1>
        <a href="add.php" class="bg-[#2E7D32] text-white px-4 py-2 rounded font-bold hover:bg-green-700">
            + Add Equipment
        </a>
    </nav>

    <!-- Main Content -->
    <main class="p-6 max-w-4xl mx-auto mt-4">
        <h2 class="text-xl font-bold mb-6 text-gray-800">Available Near You</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <?php
            // Fetch equipment from database, newest first
            $sql = "SELECT * FROM equipment ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data for each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <div class='bg-white rounded-lg shadow border border-gray-200 overflow-hidden'>
                        <div class='p-5'>
                            <h3 class='text-lg font-bold text-gray-900'>{$row['category']}</h3>
                            <p class='text-gray-600 text-sm mt-1'>📍 {$row['village_location']}</p>
                            <p class='text-gray-600 text-sm mt-1'>👤 Owner: {$row['owner_name']}</p>
                            <div class='mt-4 flex justify-between items-center'>
                                <span class='text-xl font-bold text-[#2E7D32]'>₹{$row['daily_price']}/day</span>
                                <button class='bg-[#FF6D00] text-white px-3 py-1 rounded font-bold text-sm'>
                                    Rent Now
                                </button>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<p class='text-gray-500'>No equipment listed yet. Be the first!</p>";
            }
            ?>

        </div>
    </main>

</body>
</html>
