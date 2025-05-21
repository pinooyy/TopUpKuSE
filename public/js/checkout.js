function copyToClipboard(text) {
        navigator.clipboard
          .writeText(text)
          .then(() => {
            alert("Copied to clipboard: " + text);
          })
          .catch((err) => {
            alert("Failed to copy: " + err);
          });
      }

      function downloadQRCode() {
        const qrImage = document.querySelector(".qr-code");
        const link = document.createElement("a");
        link.href = qrImage.src;
        link.download = "qrcode.png";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      }