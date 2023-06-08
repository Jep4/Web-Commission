
const gall = document.getElementById('gall');
const gall_icon = document.getElementById('gall_img');

gall_icon.addEventListener('click', () => {
    if (board.style.display == 'block') {
        board.style.display = 'none';
        embed.style.display = 'none';
        gall.style.display = 'block';

    }
    else {
        if (gall.style.display == 'block') {
            gall.style.display = 'none';
        }
        else {
            gall.style.display = 'block';

        }

    }
});


const board = document.getElementById('board');
const diary_img = document.getElementById('diary_img');
const embed = document.getElementById('embed1');


diary_img.addEventListener('click', () => {
    if (gall.style.display == 'block') {
        gall.style.display = 'none';
        board.style.display = 'block';
        embed.style.display = 'block';

    }
    else {
        if (board.style.display == 'block') {
            board.style.display = 'none';
            embed.style.display = 'none';
        }
        else {
            board.style.display = 'block';
            embed.style.display = 'block';

        }

    }
});