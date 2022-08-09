var page = (window.location.pathname).split("/").pop();
if (page == "index.php" || page == "") {
    document.addEventListener("DOMContentLoaded", mainText);
}

function mainText () {
    const textElement = document.querySelector(".text__type");
    const main = textElement.getAttribute("data-main");
    const wait = textElement.getAttribute("data-wait");

    new MainTextTypeWriter(textElement, main, wait); 
} 

class MainTextTypeWriter {
    constructor(textElement, main, wait) {
        this.textElement = textElement;
        this.main = main;
        this.wait = parseInt(wait, 10); 
        this.text = "";
        this.type(); 
    }

    type () {
        let typeSpeed = 50; 

        this.text = this.main.substring(0, this.text.length + 1);
        this.textElement.innerHTML = `<span class="text">${this.text}</span>`;
        
        if (this.text != this.main) {
            setTimeout(() => this.type(), typeSpeed);
        }
        else {
            subText(this.main); 
        }
    }
}

function subText(main) {
    const textElement = document.querySelector(".text__type");
    const words = JSON.parse(textElement.getAttribute("data-words"));
    const wait = textElement.getAttribute("data-wait");

    new SubTextTypeWriter(textElement, words, wait, main); 
}

class SubTextTypeWriter {
    constructor(textElement, words, wait, main) {
        this.textElement = textElement;
        this.words = words;
        this.text = "";
        this.main = main; 
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10); 
        this.type(); 
        this.isDeleting = false; 
    }

    type () {
        const currentIndex = this.wordIndex % this.words.length;
        const fullText = this.words[currentIndex];
        let typeSpeed = 50; 

        if (this.isDeleting && (this.wordIndex + 1 < this.words.length)) {
            typeSpeed = 75; 
            this.text = fullText.substring(0, this.text.length - 1);
            if (this.text === "") {
                this.isDeleting = false;
                this.wordIndex++;
                typeSpeed = 500; 
            }
        }
        else {
            this.text = fullText.substring(0, this.text.length + 1);
            if (this.text == fullText) {
                typeSpeed = this.wait; 
                this.isDeleting = true; 
                if (this.wordIndex + 1 == this.words.length) {
                    return; 
                }
            }
        }

        this.textElement.innerHTML = `<span class="text">${this.main + this.text}</span>`;
        setTimeout(() => this.type(), typeSpeed);
    }
}