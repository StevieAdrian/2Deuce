#include<stdio.h>
#include<string.h>

struct Data{
	char name[100] = {};
	char nim[11] = {};
};

int main(){
	FILE *fdt = fopen("testdata.in","r");
	
	int n = 0;
	fscanf(fdt, "%d", &n);

	struct Data student[1001] = {};
	struct Data *spointer[1001] = {};

	for(int i=0; i<n; i++){
		fscanf(fdt, "%s %[^\n]\n", student[i].nim, student[i].name);
		spointer[i] = &student[i];
	}
	int min_idx;
	for(int i=0; i<n; i++){
		min_idx = i;
		for(int j=i+1; j<n; j++){
			if(strcmp((*spointer[j]).nim, (*spointer[min_idx]).nim) < 0){
				min_idx = j;
			}
		}
		
		if(min_idx != i){
			struct Data *temp = spointer[i];
			spointer[i] = spointer[min_idx];
			spointer[min_idx] = temp;
		}
		
		printf("%s %s\n", (*spointer[i]).nim, (*spointer[i]).name);	
	}
	
	fclose(fdt);
	return 0;
}
v vv                   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/movieDetails.css')}}">
</head>
<body>
    <img src="assets/timelogo.png" alt="timelogo">
    <div class="container">
        <img src="{{ asset('poster/' .$movie->FilmPoster) }}" alt="{{ $movie->FilmName }}" class="image">
        <div class="desc">
            <div class="title">
                {{$movie->FilmName}}
            </div>

            <div>
                <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13">
                <img src="assets/timelogo.png" alt="timelogo">
            </div>

            <div class="descript">
                <div class="director">
                    Director    : {{$movie->FilmDirector}}
                </div>
                <div class="writers">
                    Writers     : {{$movie->FilmWriter}}
                </div>
                <div class="synopsis">
                    Synopsis    : {{$movie->FilmSynopsis}}
                </div>
            </div>
            <div class="proc">
                BUY A TICKET
            </div>
        </div>
        {{-- <img style="width: 50px; height:30px" class="ps-2" src="assets/r13.jpg" alt="r13"> --}}
    </div>

    {{-- <p>Duration: {{ $movie->FilmDuration }} minutes</p> --}}
</body>
</html>
