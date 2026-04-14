document.addEventListener("DOMContentLoaded", function () {
    const certs = document.querySelectorAll(".cert-item");
    const container = document.getElementById("cert-container");

    const showMoreSection = document.getElementById("show-more-section");
    const showMoreBtn = document.getElementById("show-more-btn");
    const countText = document.getElementById("cert-count-text");

    const btnGrid = document.getElementById("btn-grid");
    const btnCarousel = document.getElementById("btn-carousel");

    const searchInput = document.getElementById("search-input");

    let currentMode = "grid";
    const initialShowCount = 10;
    let isExpanded = false;
    countText.innerText = `(${certs.length})`;

    let animationId;
    let isCarouselRunning = false;
    let scrollSpeed = 0.5;

    function applyFilters() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleIndex = 0;

        certs.forEach((cert, index) => {
            const content = cert.textContent.toLowerCase();
            const isMatch = content.includes(query);

            if (!isMatch && query !== "") {
                cert.style.display = "none";
                cert.classList.add("hidden");
            } else {
                if (currentMode === "grid") {
                    if (
                        query === "" &&
                        !isExpanded &&
                        visibleIndex >= initialShowCount
                    ) {
                        cert.style.display = "none";
                        cert.classList.add("hidden");
                    } else {
                        cert.style.display = "";
                        cert.classList.remove("hidden");
                    }
                } else {
                    cert.style.display = "flex";
                    cert.classList.remove("hidden");
                }
                visibleIndex++;
            }
        });

        if (currentMode === "carousel" || query !== "") {
            showMoreSection.style.display = "none";
        } else {
            showMoreSection.style.display = "flex";
        }
    }

    searchInput.addEventListener("input", () => {
        applyFilters();
    });

    function startAutoScroll() {
        if (currentMode !== "carousel") return;
        isCarouselRunning = true;

        function step() {
            if (!isCarouselRunning) return;

            container.scrollLeft += scrollSpeed;

            if (
                container.scrollLeft >=
                container.scrollWidth - container.clientWidth - 1
            ) {
                container.scrollLeft = 0;
            }
            animationId = requestAnimationFrame(step);
        }
        animationId = requestAnimationFrame(step);
    }

    function stopAutoScroll() {
        isCarouselRunning = false;
        cancelAnimationFrame(animationId);
    }

    function setGridMode() {
        currentMode = "grid";
        stopAutoScroll();

        btnGrid.className =
            "p-3 bg-[#3E4D8A] rounded-lg text-white transition-all cursor-pointer shadow-lg";
        btnCarousel.className =
            "p-3 text-gray-500 hover:text-white transition-all cursor-pointer rounded-lg hover:bg-white/5";

        // โหมด Grid ธรรมดา
        container.className =
            "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 w-full max-w-full px-4 z-20 transition-all duration-500 pb-8";

        certs.forEach((cert) => {
            cert.classList.remove("w-[280px]", "md:w-[320px]", "flex-shrink-0");
            cert.classList.add("h-full");
        });

        applyFilters();
    }

    function setCarouselMode() {
        currentMode = "carousel";

        btnCarousel.className =
            "p-3 bg-[#3E4D8A] rounded-lg text-white transition-all cursor-pointer shadow-lg";
        btnGrid.className =
            "p-3 text-gray-500 hover:text-white transition-all cursor-pointer rounded-lg hover:bg-white/5";

        // 🌟 แก้ไขตรงนี้: เปลี่ยนเป็น grid 2 แถว และให้เรียงไหลไปแนวนอน (grid-flow-col)
        container.className =
            "grid grid-rows-2 grid-flow-col gap-5 w-full max-w-full px-4 z-20 overflow-x-auto hide-scrollbar py-4 transition-all duration-500";
        container.scrollLeft = 0;

        certs.forEach((cert) => {
            // กำหนดความกว้างคงที่ แต่คงความสูง h-full ไว้ให้การ์ดยืดเต็ม 2 แถวสวยๆ
            cert.classList.add(
                "w-[280px]",
                "md:w-[320px]",
                "flex-shrink-0",
                "h-full",
            );
        });

        applyFilters();
        startAutoScroll();
    }

    btnGrid.addEventListener("click", setGridMode);
    btnCarousel.addEventListener("click", setCarouselMode);

    container.addEventListener("mouseenter", stopAutoScroll);
    container.addEventListener("mouseleave", () => {
        if (
            currentMode === "carousel" &&
            !document
                .getElementById("cert-modal")
                .classList.contains("opacity-100")
        ) {
            startAutoScroll();
        }
    });

    container.addEventListener("touchstart", stopAutoScroll);
    container.addEventListener("touchend", () => {
        setTimeout(() => {
            if (currentMode === "carousel") startAutoScroll();
        }, 1000);
    });

    showMoreBtn.addEventListener("click", function (e) {
        e.preventDefault();
        isExpanded = !isExpanded;
        applyFilters();

        if (isExpanded) {
            showMoreBtn.innerHTML =
                'ย่อลง <i class="fas fa-chevron-up ml-2 group-hover:-translate-y-1 transition-transform"></i>';
        } else {
            showMoreBtn.innerHTML = `ดูทั้งหมด (${certs.length}) <i class="fas fa-chevron-down ml-2 group-hover:translate-y-1 transition-transform"></i>`;
            document
                .getElementById("certificates")
                .scrollIntoView({ behavior: "smooth" });
        }
    });
    setGridMode();

    const modal = document.getElementById("cert-modal");
    const modalImg = document.getElementById("modal-image");
    const closeBtn = document.getElementById("close-modal-btn");
    const viewBtns = document.querySelectorAll(".view-cert-btn");
    const modalContent = document.getElementById("modal-content");

    function openModal(imgSrc) {
        modalImg.src = imgSrc;
        modal.classList.remove("hidden");

        stopAutoScroll();

        setTimeout(() => {
            modal.classList.remove("opacity-0");
            modal.classList.add("opacity-100");
            modalContent.classList.remove("scale-95");
            modalContent.classList.add("scale-100");
        }, 10);

        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        modal.classList.remove("opacity-100");
        modal.classList.add("opacity-0");
        modalContent.classList.remove("scale-100");
        modalContent.classList.add("scale-95");

        setTimeout(() => {
            modal.classList.add("hidden");
            modalImg.src = "";
            document.body.style.overflow = "";

            if (currentMode === "carousel") {
                startAutoScroll();
            }
        }, 300);
    }

    viewBtns.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            const card = this.closest(".cert-item");
            const img = card.querySelector("img");
            if (img) openModal(img.src);
        });
    });

    closeBtn.addEventListener("click", closeModal);

    modal.addEventListener("click", function (e) {
        if (e.target === modal || e.target === modalContent) {
            closeModal();
        }
    });

    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && !modal.classList.contains("hidden")) {
            closeModal();
        }
    });
});
