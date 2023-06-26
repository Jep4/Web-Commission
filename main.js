
//Windows
const board = document.getElementById('board');
const embed = document.getElementsByClassName('embed');
const count = document.getElementById('count_img');

//Icons 
const logo_icon = document.getElementById('logo_img');
const about_icon = document.getElementById('about_img');
const book_icon = document.getElementById('book_img');
const diary_icon = document.getElementById('diary_img');
const txt_icon = document.getElementById('text_img');
const rep_icon = document.getElementById('rep_img');
const mes_icon = document.getElementById('mes_img');
const h1_icon = document.getElementById('h1_img');
const h2_icon = document.getElementById('h2_img');
const gall_icon = document.getElementById('gall_img');

//Gallery

const gall = document.getElementById('gall_menu');
var images = document.querySelectorAll("#img_list>li>a");
var frame = document.getElementById("frame");
var imgBox = document.getElementById('img_box');
var imgs = document.querySelectorAll("#img_box2>li");
const listBox = document.getElementById('list_box');


function winMain(bNum, isAbt) {
    //About
    if (bNum == 0) {
        //If --> Other page is on
        if (gall.style.display != 'none') {
            closeAll();
            board.style.display = 'block';
        }
        //If --> Other page is on

        else if (board.style.display != 'none') {

            //If --> Target is on
            if (isAbt == true) {
                board.style.display = 'none';
                count.style.display = 'block';
            }
            else {
                closeAll();
                board.style.display = 'block';
            }
        }

        //If --> Empty
        else {
            closeAll();
            board.style.display = 'block';
        }

    }
    else {
        bNum--;
        el = embed[bNum];
        //If --> Target is on
        if (el.style.display == 'block') {
            closeAll();
            count.style.display = 'block';
        }

        //If --> Empty
        //If --> Other page is on
        else {
            closeAll();
            board.style.display = 'block';
            el.style.display = 'block';
        }
    }




}

function closeAll() {
    for (let i = 0; i < embed.length; i++) {
        embed[i].style.display = 'none';
    }

    for (let k = 0; k < imgs.length; k++) {
        imgs[k].style.display = 'none';
    }

    for (let k = 0; k < images.length; k++) {
        images[k].style.display = 'none';
    }

    board.style.display = 'none';
    gall.style.display = 'none';
    frame.style.display = 'none';
    imgBox.style.display = 'none';
    listBox.style.display = 'none';
    count.style.display = 'none';
}

var isA = false;
//Logo Icon
logo_icon.addEventListener('click', () => {
    console.log("Button clicked");
    closeAll();
});

//About Icon
about_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(0, isA);
    isA = true;
});
//Book Icon
book_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(1, isA);
    isA = false;
});
//Diary Icon
diary_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(2, isA);
    isA = false;
});
//Text Icon
txt_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(3, isA);
    isA = false;
});
//Report Icon
rep_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(4, isA);
    isA = false;
});
//Message Icon
mes_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(5, isA);
    isA = false;
});
//Heart 1 Icon
h1_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(6, isA);
    isA = false;
});
//Heart 2 Icon
h2_icon.addEventListener('click', () => {
    console.log("Button clicked");
    winMain(7, isA);
    isA = false;
});
//Gallery 2 Icon
gall_icon.addEventListener('click', () => {
    console.log("Button clicked");
    if (gall.style.display == 'block') {
        closeAll();
    }
    else {
        closeAll();
        gall.style.display = 'block';
        listBox.style.display = 'block';
        for (let i = 0; i < images.length; i++) {
            images[i].style.display = 'block';
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


