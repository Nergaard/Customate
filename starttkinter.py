from tkinter import *


window = Toplevel()
window.attributes('-fullscreen', True)
window.title("Butikkomaten")
#.withdraw()
#window.configure(background='white')

photo=PhotoImage(file="button_start.png")
photo2=PhotoImage(file="button_send-inn.png")

#top_frame = tkinter.Frame(window).pack()
#bottom_frame = tkinter.Frame(window).pack(side = "bottom")

#funksjon

def create_Window():
    window2 = Toplevel()
    window2.attributes('-fullscreen', True)
    window2.title("Butikkomaten")

    velk = Label(window2, text = "Skriv inn hvilken vare du mener vi mangler",font=(None, 25))
    velk.place(relx=0.5, rely=0.3, anchor = CENTER)
    velk2 = Label(window2, text = "Kanskje er det flere som savner den samme varen?",font=(None, 25))
    velk2.place(relx=0.5, rely=0.4, anchor = CENTER)
    velk3 = Label(window2, text = "Hvis mange kunder mener at vi mangler noe vil vi sørge for at den blir lagt til i sortimentet",font=(None, 25))
    velk3.place(relx=0.5, rely=0.5, anchor = CENTER)
    entry = Entry(window2)
    entry.place(relx=0.5, rely=0.6, anchor = CENTER)
    knapp2 = Button(window2, image = photo2, border= 0, command=send_item)
    knapp2.place(relx=0.5, rely=0.8, anchor = CENTER)
    window.destroy()

def send_item():
    print("Seems to work")
    #Write code to send information to database
    # ---- #
    last_page()

def last_page():
    window3 = Toplevel()
    window3.attributes('-fullscreen', True)
    window3.title("Butikkomaten")

    ny = Label(window2, text = "Oensker du aa legge til et nytt ønske?",font=(None, 25))
    ny.place(relx=0.5, rely=0.3, anchor = CENTER)
    knapp2 = Button(window2, image = photo2, border= 0, command=send_item)
    knapp2.place(relx=0.5, rely=0.8, anchor = CENTER)
    window.destroy()



knapp = Button(window, image = photo, border= 0, command=create_Window)
#knapp.bind("<Button-1>",say_hi)
knapp.place(relx=0.5, rely=0.5, anchor = CENTER)
#generisk button - #btn2 = tkinter.Button(top_frame, text = "Button2", fg = "black", bg = "white").pack()



window.mainloop()
