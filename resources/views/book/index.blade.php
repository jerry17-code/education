 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 </head>

 <body>
     <div class="container my-3">
         <h2 class="bg-secondary text-white">This is welcome page</h2>

         <p class="text text-secondary my-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam laboriosam dolore blanditiis placeat nulla quisquam laborum quidem excepturi accusamus odio. Minus nulla itaque ullam molestias sequi quidem, beatae incidunt suscipit.</p>

         <table class="table table-striped">
             <thead>
                 <tr class="bg-secondary text-white">
                     <th>ID</th>
                     <th>Name</th>
                     <th>Book Of </th>
                     <th>Publish_date </th>
                     <th>Author</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($books as $book)
                 <tr>
                     <td>{{ $book->id }}</td>
                     <td>{{ $book->book_name }}</td>
                     <td>{{ $book->book_of }}</td>
                     <td>{{ $book->publish_in }}</td>
                     <td>{{ $book->author }}</td>
                 </tr>
                 @endforeach
             </tbody>

         </table>

     </div>

 </body>

 </html>