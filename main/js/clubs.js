var contents = document.querySelector('.contents')
var clubss = document.querySelector('#clubss');

let jsonString = clubss.value;

try {
    let clubt = JSON.parse(jsonString);

    function build_clubc_card(club){
        var box_container = document.createElement('div')
        box_container.classList.add('box-container')

        var img = document.createElement('img')
        img.classList.add('box-logo')
        img.src = club.club_photo
        img.alt = 'logo'
        box_container.appendChild(img)

        var boxtitle = document.createElement('div')
        boxtitle.classList.add('boxtitle')
        boxtitle.textContent = club.club_name
        box_container.appendChild(boxtitle)

        var details = document.createElement('div')
        details.classList.add('details')

        var spec = document.createElement('div')
        spec.classList.add('interest', 'box')

        img = document.createElement('img')
        img.classList.add('indice')
        img.src = 'img/clubinterest.svg'

        var span = document.createElement('span')
        span.textContent = club.specialities
        img.appendChild(span)
        spec.appendChild(img)
        details.appendChild(spec)

        spec = document.createElement('div')
        spec.classList.add('location', 'box')

        img = document.createElement('img')
        img.classList.add('indice')
        img.src = 'img/location.svg'

        span = document.createElement('span')
        span.textContent = club.school_name
        img.appendChild(span)
        spec.appendChild(img)
        details.appendChild(spec)

        box_container.appendChild(details)

        var a = document.createElement('a')
        a.classList.add('event-register')
        a.href = '';
        a.textContent = 'Join Now'
        box_container.appendChild(a)

        contents.appendChild(box_container)
    }

    function main() {
        clubt.forEach(function(club) {
            build_clubc_card(club)
        });
    }

    main();

} catch (e) {
    console.error("Error parsing the JSON string: ", e)
}