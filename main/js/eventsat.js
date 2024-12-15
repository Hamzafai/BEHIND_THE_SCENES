var event_class_big = document.querySelector('.contents');
var eventsatElement = document.querySelector('#eventsat');

if (eventsatElement) {
    const eventsat = JSON.parse(eventsatElement.value);

    function build_event_block(event) {
        const box_container = document.createElement('div');
        box_container.classList.add('box-container');

        var img = document.createElement('img');
        img.classList.add('box-logo');
        img.src = event.event_photo || 'img/clubs_logo/etc-logo.webp';
        box_container.appendChild(img);

        const box_title = document.createElement('div');
        box_title.classList.add('boxtitle');
        box_title.textContent = event.event_name;
        box_container.appendChild(box_title);

        const details = document.createElement('div');
        details.classList.add('details');
        box_container.appendChild(details);

        var interest_box = document.createElement('div');
        interest_box.classList.add('interest', 'box');
        var img = document.createElement('img');
        img.classList.add('indice');
        img.src = 'img/clubinterest.svg';
        interest_box.appendChild(img);
        var spanned = document.createElement('span');
        spanned.textContent = event.specilities;
        interest_box.appendChild(spanned);
        details.appendChild(interest_box);

        var interest_box = document.createElement('div');
        interest_box.classList.add('location', 'box');
        var img = document.createElement('img');
        img.classList.add('indice');
        img.src = 'img/location.svg';
        interest_box.appendChild(img);
        var spanned = document.createElement('span');
        spanned.textContent = event.event_start_date;
        interest_box.appendChild(spanned);
        details.appendChild(interest_box);

        var interest_box = document.createElement('div');
        interest_box.classList.add('interest', 'box');
        var img = document.createElement('img');
        img.classList.add('indice');
        img.src = 'img/clubinterest.svg';
        interest_box.appendChild(img);
        var spanned = document.createElement('span');
        spanned.textContent = event.event_link;
        interest_box.appendChild(spanned);
        details.appendChild(interest_box);

        const a = document.createElement('a');
        a.classList.add('event-register');
        a.textContent = 'See details';
        a.href = `html/eventoverview.php?event_id=${event.event_id}`;
        box_container.appendChild(a);

        event_class_big.appendChild(box_container);
    }

    function main() {
        eventsat.forEach(function(event) {
            build_event_block(event);
        });
    }

    main();

} 
