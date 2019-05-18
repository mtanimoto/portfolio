$(window).load(function() {
    // $('button.submit').on('click', function(event) {
    //     event.preventDefault();
    //     getFirstItem().then((item) => {
    //         console.log(item);
    //     }).catch((e) => {
    //         console.error(e);
    //     });
    // });

    // function getUrl(url) {
    //     return new Promise((resolve, reject) => {
    //         let xhr = new XMLHttpRequest();
    //         xhr.open("POST", url);
    //         xhr.onload = () => {
    //             if (xhr.status === 200) {
    //                 resolve(xhr.response);
    //             } else {
    //                 reject(new Error(xhr.statusText));
    //             }
    //         };
    //         xhr.onerror = () => {
    //             reject(new Error(xhr.statusText));
    //         };
    //         xhr.send();
    //     });
    // }

    // function getFirstItem() {
    //     return getUrl("/api/blog").then((items) => {
    //         return items;
    //     });
    // }
});