import { hamburger, setText } from './module.js';

hamburger();

setText();

//フィルタリング

//YEAR
const $selectYear = document.getElementById('selectYear');
// console.log($selectYear);

//Gategory
const $selectGategory = document.getElementById('selectGategory');
// console.log($selectGategory);

//item取得
const $items = document.querySelectorAll('.item');
// console.log($items);



$selectYear.addEventListener('change', () => {
    // console.log($selectYear.value);
    $items.forEach((item) => {
        //一度すべて非表示
        item.style.display = "none";

        //GategoryがAllの場合
        if ($selectGategory.value === 'all') {
            //YearがAllの場合はすべて表示
            if ($selectYear.value === 'all') {
                item.style.display = "block";
            }

            if (item.dataset.year === $selectYear.value) {
                item.style.display = "block";
            }
        }
        //Gategoryがプレスリリースの場合
        if ($selectGategory.value === 'release') {
            //itemがreleaseを持っているものを表示
            if (item.dataset.gategory === 'release' && item.dataset.year === $selectYear.value) {
                item.style.display = "block";
            }

            if ($selectYear.value === 'all' && item.dataset.gategory === 'release') {
                item.style.display = "block";
            }
        }

        if ($selectGategory.value === 'notice') {
            if (item.dataset.gategory === 'notice' && item.dataset.year === $selectYear.value) {
                item.style.display = "block";
            }

            if ($selectYear.value === 'all' && item.dataset.gategory === 'notice') {
                item.style.display = "block";
            }
        }

    });
});




$selectGategory.addEventListener('change', () => {

    $items.forEach((item) => {
        //一度すべて非表示
        item.style.display = "none";




        //YearがAllの場合
        if ($selectYear.value === 'all') {
            //GategoryがAllの場合はすべて表示
            if ($selectGategory.value === 'all') {
                item.style.display = "block";
            }

            if (item.dataset.gategory === $selectGategory.value) {
                item.style.display = "block";
            }
        }

        //Yearが2020の場合
        if ($selectYear.value === '2021') {
            //itemが2020を持っているものを表示
            if (item.dataset.year === '2021' && item.dataset.gategory === $selectGategory.value) {
                item.style.display = "block";
            }

            if ($selectGategory.value === 'all' && item.dataset.year === '2021') {
                item.style.display = "block";
            }
        }


        if ($selectYear.value === '2022') {
            //itemが2019を持っているものを表示
            if (item.dataset.year === '2022' && item.dataset.gategory === $selectGategory.value) {
                item.style.display = "block";
            }

            if ($selectGategory.value === 'all' && item.dataset.year === '2022') {
                item.style.display = "block";
            }
        }





    });
});
