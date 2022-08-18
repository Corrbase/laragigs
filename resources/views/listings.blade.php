
{{-- This code if you use only php(no blade.php) --}}

<!--    <h1>--><?php //echo $heading ?><!--</h1>-->
<!--    -->
<!--    --><?php //foreach ($listings as $listing){
//            echo "<h2>";
//                echo $listing['title'];
//            echo "</h2>";
//            echo "<p>";
//                echo $listing['description'];
//            echo "</p>";
//    }
//
//    ?>

    <h1>{{ $heading }}</h1>

        @if(count($listings) == 0)
            <p>No listings found</p>
        @endif


   @foreach ($listings as $listing)

       <h2>{{ $listing['title'] }}</h2>

       <p>{{ $listing['description'] }}</p>

   @endforeach
