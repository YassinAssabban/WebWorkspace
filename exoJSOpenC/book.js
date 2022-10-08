class Book {
    constructor(title, author, description, pages, currentPage, read) {
        this.title = title;
        this.author = author;
        this.description = description;
        this.pages = pages;
        this.currentPage = currentPage;
        this.read = read;
    }

    function readBook(page) {
        if (page < 1 || page > pages) {
            return 0;
        } else if (page >= 1 && page < pages)
            {
                this.currentPage = page;
                return 1;
            } else if (page == this.pages) {
                this.currentPage = page;
                this.read = true;
                return 1;
            } else {
                return 0;
            }
    }

    export const books = [books1,books2,book3];
    books1 = new Book("Livre1", "Yassin", "Livre n1 monde", 240, 0, false);
    books2 = new Book("Livre2", "Thomas", "Livre n2 monde", 370, 14, false);
    books3 = new Book("Livre3", "Benjamin", "Livre n3 monde", 160, 24, false);
}