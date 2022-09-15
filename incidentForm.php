<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>SubmitIT! Incident Form</title>
</head>
<body>
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Main page</a></li>
    <li class="breadcrumb-item active" aria-current="page">Incident Form</li>
  </ol>
</nav>

    <h1 class="text-center">Use this form to submit your incident!</h1>
        
    <form action="">
        <input class="form-control" type="text" value="Incident Number : INC<?php print rand(1, 1000000); ?>"  aria-label="readonly input example" readonly name="incNumber">
        <div class="form-floating">
  <input type="text" class="form-control" id="Username" placeholder="Username" value="<?php echo $_SESSION['username']; ?>">
  <label for="Username">Username</label>
</div>
        <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Select the type of incident : </option>
    <option value="app">Application</option>
    <option value="hardware">Hardware</option>
    <option value="network">Network</option>
  </select>
  <label for="floatingSelect">Incident type</label>
</div>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">If you have attachments (emails, screenshots etc.) please insert them here</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>

<button type="submit" class="btn btn-primary">Submit the incident</button>

    </form>
        <a href="./index.php" class="btn btn-warning">Go back to the main page</a>
      
</body>
</html>