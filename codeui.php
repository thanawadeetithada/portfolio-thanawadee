<style>
    .editor-window {
        background-color: #0f172a;
        border-radius: 12px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 550px;
        overflow: hidden;
        border: 1px solid #1e293b;
        text-align: left;
    }
    .editor-header {
        background-color: #1e293b;
        padding: 12px 16px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #000;
    }
    .traffic-lights { display: flex; gap: 8px; }
    .dot { width: 12px; height: 12px; border-radius: 50%; }
    .dot-red { background-color: #ff5f56; }
    .dot-yellow { background-color: #ffbd2e; }
    .dot-green { background-color: #27c93f; }
    
    .editor-tabs { margin-left: 20px; display: flex; gap: 4px; }
    .tab-active {
        color: #e2e8f0;
        background-color: #334155;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 13px;
        font-family: monospace;
    }

    .editor-body {
        padding: 16px 0;
        display: flex;
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        font-size: 14px;
        line-height: 1.6;
        overflow-x: auto;
    }
    .line-numbers {
        padding: 0 16px;
        color: #475569;
        text-align: right;
        user-select: none;
        border-right: 1px solid #1e293b;
    }
    
    .code-container {
        padding: 0 16px;
        color: #d4d4d4; 
        white-space: pre;
        position: relative;
    }

    /* สี Syntax Highlighting */
    .syn-tag { color: #569cd6; }    
    .syn-attr { color: #9cdcfe; }   
    .syn-str { color: #ce9178; } 
    .syn-punct { color: #808080; }  

    .code-cursor {
        display: inline-block;
        width: 8px;
        height: 16px;
        background-color: #f1f5f9;
        margin-left: 2px;
        animation: blink 0.8s infinite;
        vertical-align: middle;
    }
    @keyframes blink {
        0%, 100% { opacity: 0; }
        50% { opacity: 1; }
    }
    
    .editor-footer {
        background-color: #007acc; 
        padding: 4px 16px;
        color: white;
        font-size: 12px;
        display: flex;
        justify-content: space-between;
        font-family: sans-serif;
    }
</style>

<div class="editor-window">
    <div class="editor-header">
        <div class="traffic-lights">
            <div class="dot dot-red"></div>
            <div class="dot dot-yellow"></div>
            <div class="dot dot-green"></div>
        </div>
        <div class="editor-tabs">
            <div class="tab-active">profile.html</div>
        </div>
    </div>
    
    <div class="editor-body">
        <div class="line-numbers" id="lineNumbers"></div>
        <div class="code-container"><span id="typewriter"></span><span class="code-cursor"></span></div>
    </div>
    
    <div class="editor-footer">
        <span id="status-line">Ln 14, Col 7</span>
        <span>HTML5 - UTF-8</span>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    
    const codeLinesArray = [
        '<span class="syn-punct">&lt;</span><span class="syn-tag">div</span> <span class="syn-attr">class</span>=<span class="syn-str">"developer-profile"</span><span class="syn-punct">&gt;</span>',
        '    <span class="syn-punct">&lt;</span><span class="syn-tag">h1</span><span class="syn-punct">&gt;</span>Thanawadee Tithada (Baifern)<span class="syn-punct">&lt;/</span><span class="syn-tag">h1</span><span class="syn-punct">&gt;</span>',
        '    <span class="syn-punct">&lt;</span><span class="syn-tag">h2</span> <span class="syn-attr">class</span>=<span class="syn-str">"role"</span><span class="syn-punct">&gt;</span>Full Stack Developer<span class="syn-punct">&lt;/</span><span class="syn-tag">h2</span><span class="syn-punct">&gt;</span>',
        '',
        '    <span class="syn-punct">&lt;</span><span class="syn-tag">ul</span> <span class="syn-attr">class</span>=<span class="syn-str">"skills"</span><span class="syn-punct">&gt;</span>',
        '        <span class="syn-punct">&lt;</span><span class="syn-tag">li</span><span class="syn-punct">&gt;</span>JavaScript<span class="syn-punct">&lt;/</span><span class="syn-tag">li</span><span class="syn-punct">&gt;</span>',
        '        <span class="syn-punct">&lt;</span><span class="syn-tag">li</span><span class="syn-punct">&gt;</span>Angular<span class="syn-punct">&lt;/</span><span class="syn-tag">li</span><span class="syn-punct">&gt;</span>',
        '        <span class="syn-punct">&lt;</span><span class="syn-tag">li</span><span class="syn-punct">&gt;</span>PHP & SQL<span class="syn-punct">&lt;/</span><span class="syn-tag">li</span><span class="syn-punct">&gt;</span>',
        '    <span class="syn-punct">&lt;/</span><span class="syn-tag">ul</span><span class="syn-punct">&gt;</span>',
        '',
        '    <span class="syn-punct">&lt;</span><span class="syn-tag">p</span> <span class="syn-attr">class</span>=<span class="syn-str">"focus"</span><span class="syn-punct">&gt;</span>',
        '        Beautifully Functional. Highly Interactive.',
        '    <span class="syn-punct">&lt;/</span><span class="syn-tag">p</span><span class="syn-punct">&gt;</span>',
        '<span class="syn-punct">&lt;/</span><span class="syn-tag">div</span><span class="syn-punct">&gt;</span>'
    ];

    // สร้างเลขบรรทัด
    const lineNumbersElement = document.getElementById("lineNumbers");
    let lineNumbersHTML = "";
    for (let i = 1; i <= codeLinesArray.length; i++) {
        lineNumbersHTML += i + "<br>";
    }
    lineNumbersElement.innerHTML = lineNumbersHTML;

    // รวบโค้ดทั้งหมดเป็นก้อนเดียว
    const fullHTML = codeLinesArray.join('\n');
    const typingElement = document.getElementById("typewriter");
    
    let index = 0;
    let currentHTML = "";
    const speed = 40; // ปรับความเร็วได้ (ค่าน้อยยิ่งพิมพ์เร็ว)

    function typeChar() {
        if (index < fullHTML.length) {
            let char = fullHTML.charAt(index);

            // 1. ถ้าเจอแท็ก HTML (เช่น <span ...>) ให้ข้ามไปพิมพ์ทีเดียวทั้งก้อนแบบไม่หน่วงเวลา
            if (char === '<') {
                let tagEnd = fullHTML.indexOf('>', index);
                if (tagEnd !== -1) {
                    currentHTML += fullHTML.substring(index, tagEnd + 1);
                    index = tagEnd + 1;
                    typeChar(); // ข้ามไปพิมพ์ตัวถัดไปทันที
                    return;
                }
            }

            // 2. ถ้าเจอสัญลักษณ์พิเศษ HTML (เช่น &lt; แทนเครื่องหมาย <) ให้พิมพ์ทีเดียวเพื่อไม่ให้มันแสดงตัว & ออกมาก่อน
            if (char === '&') {
                let entEnd = fullHTML.indexOf(';', index);
                if (entEnd !== -1 && (entEnd - index) < 10) {
                    currentHTML += fullHTML.substring(index, entEnd + 1);
                    index = entEnd + 1;
                    typingElement.innerHTML = currentHTML;
                    setTimeout(typeChar, speed); // หน่วงเวลา 1 จังหวะ เพราะถือว่าเป็น 1 ตัวอักษรบนหน้าจอ
                    return;
                }
            }

            // 3. พิมพ์ตัวอักษรธรรมดาทีละตัว
            currentHTML += char;
            index++;
            typingElement.innerHTML = currentHTML;
            setTimeout(typeChar, speed);
        }
    }

    // สั่งเริ่มพิมพ์
    typeChar();
});
</script>