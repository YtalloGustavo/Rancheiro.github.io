document.addEventListener("DOMContentLoaded", function() {
    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach(accordion => {
        const header = accordion.querySelector('.accordion-header');
        header.addEventListener('click', () => {
            const body = accordion.querySelector('.accordion-body');

            if (body.classList.contains('active')) {
                body.classList.remove('active');
            } else {
                document.querySelectorAll('.accordion-body').forEach(b => b.classList.remove('active'));
                body.classList.add('active');
            }
        });
    });
});
