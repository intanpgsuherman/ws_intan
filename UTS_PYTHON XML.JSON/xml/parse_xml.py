import xml.dom.minidom as minidom

def main():
    # gunakan fungsi parse() untuk me-load xml ke memori 
    # dan melakukan parsing
    doc = minidom.parse("mahasiswa.xml")

    # Cetak isi doc dan tag pertamanya
    print (doc.nodeName)
    print (doc.firstChild.tagName)


if __name__ == "__main__":
    main()