// import Echo from "laravel-echo";
// import Pusher from "pusher-js";

// window.Pusher = Pusher;

// const echo = new Echo({
//     broadcaster: "pusher",
//     key: "f9bb310e30380cc49d62", // Pusher App Key của bạn
//     cluster: "mt1",
//     encrypted: true,
// });

// // Lắng nghe sự kiện 'form-submitted' (Registed)
// echo.channel("my-channel").listen("form-submitted", (data) => {
//     if (data && data.user && data.user.name && data.user.email) {
//         // Hiển thị thông báo cho sự kiện đăng ký mới (Registed)
//         toastr.success(
//             "New User Registered",
//             "Name: " + data.user.name + "<br>Email: " + data.user.email,
//             {
//                 timeOut: 15000,
//                 extendedTimeOut: 60000,
//                 closeButton: true,
//                 progressBar: true,
//             }
//         );
//     }
// });

// // Lắng nghe sự kiện 'user-logged-out' (LoggedOut)
// echo.channel("my-channel").listen("user-logged-out", (data) => {
//     if (data && data.user && data.user.name) {
//         // Hiển thị thông báo cho sự kiện logout
//         toastr.info("User logged out", "User: " + data.user.name, {
//             timeOut: 15000,
//             extendedTimeOut: 60000,
//             closeButton: true,
//             progressBar: true,
//         });
//     }
// });
