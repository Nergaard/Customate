import tkinter as tk
from tkinter import PhotoImage
from tkinter import *



class SampleApp(tk.Tk):
    #def __init__(self) is sort of the constructor for python. Self is an instance of the class
    def __init__(self):
        #I thingk this creates an instance of tkinter
        tk.Tk.__init__(self)
        #Set the frame parameter of the instance equal to nothing
        self._frame = None
        #Set the size to be full screen
        self.attributes('-fullscreen', True)
        #Run the methof switch_frame with the argument StartPage
        self.switch_frame(StartPage)


    def switch_frame(self, frame_class):
        """Destroys current frame and replaces it with a new one."""
        #Sets a new frame by using the correct method and using the instance as an argument
        new_frame = frame_class(self)
        #If the current frame is not none it is destroyed.
        if self._frame is not None:
            self._frame.destroy()
        #The current frame is set to the new frame regardless of the if statement
        self._frame = new_frame
        #Using pack
        self._frame.pack(side="top", fill="both", expand=True)


class StartPage(tk.Frame):
    def __init__(self, master):

        tk.Frame.__init__(self, master)
        #tk.Label(self, text="This is the start page").pack(side="top", fill="x", pady=10)
        self.photo=PhotoImage(file="button_start.png")
        buttin = tk.Button(self, image = self.photo,border=0,
                  command=lambda: master.switch_frame(PageOne)).place(relx=0.5, rely=0.5, anchor = CENTER)

class PageOne(tk.Frame):
    def __init__(self, master):
        tk.Frame.__init__(self, master)
        velk = tk.Label(self, text = "Skriv inn hvilken vare du mener vi mangler",font=(None, 25))
        velk.place(relx=0.5, rely=0.3, anchor = CENTER)
        velk2 = tk.Label(self, text = "Kanskje er det flere som savner den samme varen?",font=(None, 25))
        velk2.place(relx=0.5, rely=0.4, anchor = CENTER)
        velk3 = tk.Label(self, text = "Hvis mange kunder mener at vi mangler noe vil vi sørge for at den blir lagt til i sortimentet",font=(None, 25))
        velk3.place(relx=0.5, rely=0.5, anchor = CENTER)
        self.entry = tk.Entry(self, font=(None,15))
        self.entry.place(relx=0.5, rely=0.6, anchor = CENTER, height=100, width = 300)

        self.photo2=PhotoImage(file="button_send-inn.png")
        knapp2 = tk.Button(self, image = self.photo2, border= 0, command=lambda: master.switch_frame(PageTwo))
        knapp2.place(relx=0.5, rely=0.8, anchor = CENTER)

class PageTwo(tk.Frame):
    def __init__(self, master):
        tk.Frame.__init__(self, master)
        ny = tk.Label(self, text = "Ønsker du å legge til flere ønsker?",font=(None, 25))
        ny.place(relx=0.5, rely=0.3, anchor = CENTER)
        ja = tk.Button(self, text = "JA", border= 0, command=lambda: master.switch_frame(PageOne))
        ja.place(relx=0.4, rely=0.8, anchor = CENTER)
        nei = tk.Button(self, text = "NEI", border= 0, command=lambda: master.switch_frame(PageThree))
        nei.place(relx=0.6, rely=0.8, anchor = CENTER)



class PageThree(tk.Frame):
    def __init__(self, master):
        tk.Frame.__init__(self, master)
        thank = tk.Label(self, text = "Takk for din tilbakemelding!",font=(None, 25))
        thank.place(relx=0.5, rely=0.3, anchor = CENTER)
        nei = tk.Button(self, text = "Tilbake til forsiden", border= 0, command=lambda: master.switch_frame(StartPage))
        nei.place(relx=0.6, rely=0.8, anchor = CENTER)




if __name__ == "__main__":
    app = SampleApp()
    app.mainloop()
