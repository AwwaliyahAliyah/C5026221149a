@extends('master2')
@section('judulhalaman', 'Data Chat')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Chat</h3>

	<br/>
	<br/>

	@foreach($chat as $c)
    <div class="card">
        <div class="card-body">
            <?php
                $words = explode(' ', $c->pesan);
                $emoticons = [
                    ':))' => '1.png',
                    ':3' => '2.png',
                    ':P' => '3.png',
                    ':C' => '4.png',
                    ';)' => '5.png',
                ];

                foreach ($words as $word) {
                    $emoticonPath = $emoticons[$word] ?? null;
                    if ($emoticonPath) {
                        echo "<img src='$emoticonPath' alt='$word'>";
                    } else {
                        echo "$word ";
                    }
                }
            ?>
        </div>
    </div>
	@endforeach

@endsection
