<?php
// POST -> buat nyimpen data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode([
        "erroor" => "kamu manggil pake: " . $_SERVER['REQUEST_METHOD'],
        "data" => null
    ]);
// PUT -> buat update data tapi satu kolom
} else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    echo json_encode([
        "erroor" => "kamu manggil pake: " . $_SERVER['REQUEST_METHOD'],
        "data" => null
    ]);
// PATCH -> buat update data tapi banyak kolom
} else if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
    echo json_encode([
        "erroor" => "kamu manggil pake: " . $_SERVER['REQUEST_METHOD'],
        "data" => null
    ]);
// DELETE -> buat hapus data
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    echo json_encode([
        "erroor" => "kamu manggil pake: " . $_SERVER['REQUEST_METHOD'],
        "data" => null
    ]);
// GET -> buat nampilin data
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode([
        "erroor" => "kamu manggil pake: " . $_SERVER['REQUEST_METHOD'],
        "data" => null
    ]);
}