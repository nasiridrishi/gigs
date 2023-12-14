<h1>{{$heading}}</h1>
@foreach($listings as $listing)
    <h3>{{$listing['title']}}</h3>
    <p>{{$listing['description']}}</p>
@endforeach
