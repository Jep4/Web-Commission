
const gall = document.getElementById('gall_menu');
const gall_icon = document.getElementById('gall_img');
const listBox = document.getElementById('list_box');
const board = document.getElementById('board');
const diary_img = document.getElementById('diary_img');
const embed = document.getElementById('embed1');
var images = document.querySelectorAll("#img_list>li>a");
var frame = document.getElementById("frame");
var imgBox = document.getElementById('img_box');
var imgs = document.querySelectorAll("#img_box2>li");


gall_icon.addEventListener('click', () => {
    if (board.style.display == 'block') {
        board.style.display = 'none';
        embed.style.display = 'none';
        gall.style.display = 'block';
        listBox.style.display = 'block';
        imgBox.style.display = 'block';

    }
    else {
        if (gall.style.display == 'block') {
            gall.style.display = 'none';
            frame.style.display = 'none';
            listBox.style.display = 'none';
            imgBox.style.display = 'none';
        }
        else {
            gall.style.display = 'block';
            listBox.style.display = 'block';

        }

    }
});

diary_img.addEventListener('click', () => {
    if (gall.style.display == 'block') {
        gall.style.display = 'none';
        frame.style.display = 'none';
        imgBox.style.display = 'none';
        listBox.style.display = 'none';
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

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener("click", function (e) {
        e.preventDefault();

        for (let k = 0; k < imgs.length; k++) {
            imgs[k].style.display = 'none';
        }
        frame.style.display = 'block';
        imgBox.style.display = 'block';
        imgs[i].style.display = 'block';
    });
}


