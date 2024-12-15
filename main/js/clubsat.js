var club_class_big= document.querySelector('.contents')
var clubsat_bad= document.querySelector('#clubsatData').value

const clubsat_matrix= clubsat_bad.split(';').map(entry=> { 
    const [club_name ,club_photo, school_name , specialities]= entry.split(':');
    return {club_name ,club_photo, school_name , specialities};
});

function get_club(){
    var club =[]

    club.push(clubsat_matrix[0])
    clubsat_matrix.shift()

    return club
}

function build_club_block(clubs){
    clubs.forEach(club => {
        const box_container = document.createElement('div')
        box_container.classList.add('box-container')
    
        var img= document.createElement('img')
        img.classList.add('box-logo')
        img.src= club.club_photo || 'img/clubs_logo/etc-logo.webp'
        box_container.appendChild(img)
    
        const box_title=document.createElement('div')
        box_title.classList.add('boxtitle')
        box_title.textContent=club.club_name
        box_container.appendChild(box_title)

        const details= document.createElement('div')
        details.classList.add('details')
        box_container.appendChild(details)

        var interest_box=document.createElement('interest_box')
        interest_box.classList.add('interest', 'box')

        var img=document.createElement('img')
        img.classList.add('indice')
        img.src='img/clubinterest.svg'
        interest_box.appendChild(img)

        var spanned=document.createElement('span')
        spanned.textContent=club.specialities
        interest_box.appendChild(spanned)

        details.appendChild(interest_box)

        var interest_box=document.createElement('div')
        interest_box.classList.add('location', 'box')

        var img=document.createElement('img')
        img.classList.add('indice')
        img.src='img/location.svg'
        interest_box.appendChild(img)

        var spanned=document.createElement('span')
        spanned.textContent=club.school_name
        interest_box.appendChild(spanned)

        details.appendChild(interest_box)

        const a=document.createElement('a')
        a.classList.add('event-register')
        a.textContent='See details'
        box_container.appendChild(a)

        club_class_big.appendChild(box_container)
    });

}

function main(){
    while(clubsat_matrix.length>0){ 
        var clubby = get_club()
        build_club_block(clubby)
    }
}

main()