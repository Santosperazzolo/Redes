<?php
// Simple landing to navigate the project locally
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogiAR · Proyecto</title>
  <style>
    :root{ --line:#e5e7eb; --muted:#475569 }
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Inter,Arial,sans-serif;margin:40px;color:#0f172a;background:#f8fafc}
    .wrap{width:min(100% - 32px, 900px); margin:auto}
    .card{background:#fff;border:1px solid var(--line);border-radius:14px;box-shadow:0 8px 22px rgba(2,6,23,.06);padding:18px}
    h1{margin:0 0 12px;font-size:22px}
    ul{margin:8px 0 0;padding-left:18px}
    a{color:#1e40af;text-decoration:none}
    a:hover{text-decoration:underline}
  </style>
  </head>
  <body>
    <div class="wrap">
      <div class="card">
        <h1>LogiAR · Proyecto</h1>
        <ul>
          <li><a href="logistica.html">Cotizador de envíos</a></li>
          <li><a href="admin/cotizaciones.php">Admin: ver cotizaciones</a></li>
          <li><a href="db/logistica.sql">Esquema SQL</a></li>
        </ul>
      </div>
    </div>
  </body>
  </html>
