const left_scroll = document.querySelector('#left_scroll');
const right_scroll = document.querySelector('#right_scroll');
const pop_song = document.querySelector('.pop_song');

left_scroll.addEventListener('click', () => {
    pop_song.scrollLeft -= 330;
});

right_scroll.addEventListener('click', () => {
    pop_song.scrollLeft += 330;
});