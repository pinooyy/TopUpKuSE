
const testimonials = [
  {
    name: "Alvin Christian",
    job: "Mahasiswa",
    image: "Assets SoftEng/client1.png",
    testimonial:
      "TopUpKu adalah pilihan terbaik untuk top up game. Harga bersaing dan layanan pelanggan yang ramah!",
  },
  {
    name: "Alfredo Rodrigo",
    job: "Mahasiswa",
    image: "Assets SoftEng/client2.jpg",
    testimonial:
      "TopUpKu! Proses top up cepat dan aman. Saya sangat puas dengan layanan ini!",
  },
  {
    name: "Joe Abednego",
    job: "Mahasiswa",
    image: "Assets SoftEng/client3.jpg",
    testimonial:
      "Saya sangat merekomendasikan TopUpKu kepada teman-teman saya. Prosesnya mudah dan cepat!",
  },
  {
    name: "Nicholas Matthew Gunawan",
    job: "Mahasiswa",
    image: "Assets SoftEng/client4.jpg",
    testimonial:
      "Saya senang sekali menggunakan TopUpKu! Prosesnya cepat dan aman. Sangat direkomendasikan!",
  },
  {
    name: "Nico Saputra",
    job: "Mahasiswa",
    image: "Assets SoftEng/client5.jpg",
    testimonial:
      "TopUpKu Terima kasih! Proses top up cepat dan aman. Saya sangat puas dengan layanan ini!",
  },
];

let i = 0;
const j = testimonials.length;
const testimonialContainer = document.getElementById("testimonial-container");
const nextBtn = document.getElementById("next");
const prevBtn = document.getElementById("prev");

nextBtn.addEventListener("click", () => {
  i = (j + i + 1) % j;
  displayTestimonial();
});

prevBtn.addEventListener("click", () => {
  i = (j + i - 1) % j;
  displayTestimonial();
});

function displayTestimonial() {
  testimonialContainer.innerHTML = `
    <p>${testimonials[i].testimonial}</p>
    <img src="${testimonials[i].image}" alt="photo of ${testimonials[i].name}">
    <h3>${testimonials[i].name}</h3>
    <h6>${testimonials[i].job}</h6>
  `;
}

// Tampilkan testimoni pertama saat halaman dimuat
displayTestimonial();
