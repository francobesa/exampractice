<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Grid</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <style>
        .rounded-header {
            border-radius: 10px;
            background-color: #351F0C;
            padding: 10px;
            color: #F5F4F3;
        }
    </style>
</head>
<body>

<!-- Header Row -->
<div class="row d-flex justify-content-center">
    <div class="col-md-9 col-lg-12 col-xl-12 text-center grid-item fw-bold fs-3 rounded-header">
        Asset
    </div>
</div>

<!-- Table for category -->
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($samples as $sample)
        <tr>
            <td>{{$sample->sample_name}}</td>
            <td>{{$sample->sample_type}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>